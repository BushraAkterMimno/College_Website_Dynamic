<?php 
require 'admin/db.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btn'])) {
    $userName = mysqli_real_escape_string($conn, $_POST['name']);
    $userFatherName = mysqli_real_escape_string($conn, $_POST['father_name']);
    $userMotherName = mysqli_real_escape_string($conn, $_POST['mother_name']);
    $userBirthdayDate = $_POST['birthday_date'];
    $userGender = $_POST['gender'];
    $userCurrentAddress = mysqli_real_escape_string($conn, $_POST['current_address']);
    $userPermanentAddress = mysqli_real_escape_string($conn, $_POST['permanent_address']);
    $userGroup = $_POST['group'];
    $userMobileNumber = mysqli_real_escape_string($conn, $_POST['mobile_number']);
    $userEmailAddress = mysqli_real_escape_string($conn, $_POST['email_address']);
    $userNationality = mysqli_real_escape_string($conn, $_POST['nationality']);

    $errors = [];

    // File Handling
    if (!empty($_FILES['img']['name'])) {
        $directory = 'img/apply-img/';
        $file_name = time() . '_' . basename($_FILES['img']['name']); // Unique name
        $target_file = $directory . $file_name;
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $file_size = $_FILES['img']['size'];
        $img = $_FILES['img']['tmp_name'];

        // Validate Image
        $allowed_types = ['jpg', 'jpeg', 'png'];
        $check = getimagesize($img);
        
        if (!$check) {
            $errors[] = "File is not an image.";
        } elseif (!in_array($file_type, $allowed_types)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } elseif ($file_size > 2097152) {
            $errors[] = "File size should not exceed 2MB.";
        } elseif (file_exists($target_file)) {
            $errors[] = "File already exists.";
        }

        // If no errors, move file
        if (empty($errors) && move_uploaded_file($img, $target_file)) {
            // Insert Data using Prepared Statement
            $stmt = $conn->prepare("INSERT INTO apply 
            (Name, Father_Name, Mother_name, Birthday_Date, Gender, Current_Address, Permanent_Address, `Group`, Mobile_Number, Email_Address, Nationality, Image) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssssssss", 
                $userName, $userFatherName, $userMotherName, 
                $userBirthdayDate, $userGender, 
                $userCurrentAddress, $userPermanentAddress, 
                $userGroup, $userMobileNumber, 
                $userEmailAddress, $userNationality, 
                $file_name
            );

            if ($stmt->execute()) {
                echo '<p style="color:green;">Application submitted successfully.</p>';
                header("Location: apply.php");
                exit();
            } else {
                $errors[] = "Database error: " . $conn->error;
            }
        }
    } else {
        $errors[] = "Please select an image.";
    }

    // Display Errors
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<p style="color:red;">' . $error . '</p>';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 0 10px;
        }
        body::before{
            content: "";
            position: absolute;
            width: 100%;
            height: 750px;
            background-image: url('img/accademic/bg.jpg');
            background-position: center;
            background-size: cover;
            z-index: -1
        }
        .main {
            width: 500px;
            height: 690px;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ffffff80;
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(8px);
        }
    </style>
</head>
<body>

    <div class="main">
        <img src="img/logo/menu-logo.png" height="40px" width="40px">
        <p><b>BHRS COLLEGE</b></p>
        <h2>Apply Form</h2>
        <h4>Fillup the form and Submit to the committee</h4>
        <hr>
        <br>

        <form method="post" action="" enctype="multipart/form-data">
            <p>1. Name: <input required type="text" name="name"></p>
            <p>2. Father's Name: <input required type="text" name="father_name"></p>
            <p>3. Mother's Name: <input required type="text" name="mother_name"></p>
            <p>4. Birthday Date: <input required type="date" name="birthday_date"></p>
            <p><label for="gnd">5. Gender</label>
            <select name="gender" for="gnd">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
            </p>
            <p>6. Current Address: <input required type="text" name="current_address"></p>
            <p>7. Permanent Address: <input required type="text" name="permanent_address"></p>
            <p>
                <label for="gro">8. Group</label>
                <select name="group" for="gro">
                    <option value="Science">Science</option>
                    <option value="Arts">Arts</option>
                    <option value="commerce">Commerce</option>
                </select>
            </p>
            <p>9. Mobile Number: <input required type="number" name="mobile_number"></p>
            <p>10. E-mail Address: <input required type="email" name="email_address"></p>
            <p>11. Nationality: <input required type="text" name="nationality"></p>
            <p>12. Image: <input required type="file" name="img"></p>
            <p><input type="submit" name="btn" value="Submit"></p>
        </form>
    </div>
</body>
</html>