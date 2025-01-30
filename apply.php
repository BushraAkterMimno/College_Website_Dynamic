<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'college_batabase';
$conn = mysqli_connect($hostname,$username,$password,$dbname);
?>

<?php 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Form</title>
    <style>
        /* body{
            font-family: Arial, sans-serif;
        } */
        body {
            font-family: Arial, sans-serif;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 0 10px;
            color: white;
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
            /* margin: 70px auto; */
            text-align: center;
            /* border: 1px solid #ddd; */
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

    <?php 
        if(isset($_POST['btn'])){
            $userName = $_POST['name'];
            $userFatherName = $_POST['father_name'];
            $userMotherName = $_POST['mother_name'];
            $userBirthdayDate = $_POST['birthday_date'];
            $userGender = $_POST['gender'];
            $userCurrentAddress = $_POST['current_address'];
            $userPermanentAddress = $_POST['permanent_address'];
            $userGroup = $_POST['group'];
            $userMobileNumber = $_POST['mobile_number'];
            $userEmailAddress = $_POST['email_address'];
            $userNationality = $_POST['nationality'];
            
            
            $directory = 'img/apply-img/';
            $target_file = $directory . basename($_FILES['img']['name']);
            $main_file = basename($_FILES['img']['name']);
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            $file_size = $_FILES['img']['size'];
            $img = $_FILES['img']['tmp_name'];
            
            if (empty($img)) {
                echo '<p style="color:black;">Please select an image.</p>';
            }
            else{
                if (file_exists($target_file)) {
                    echo '<p style="color:black;">Image already exists.</p>';
                }
                else {
                    if ($file_size > 2097152) { // 2MB limit
                        echo '<p style="color:black;">File size is too large. Maximum size is 2MB.</p>';
                    }
                    else {
                        if ($file_type != 'jpg' && $file_type != 'png') {
                            echo '<p style="color:black;">Please select a JPG or PNG image.</p>';
                        }
                        else {
                            // move the uploaded file to the target directory
                            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                                // insert data into the database
                                $insert_data = mysqli_query($conn, "INSERT INTO  apply  (
                                Name,
                                Father_Name,
                                Mother_name,
                                Birthday_Date,
                                Gender,
                                Current_Address,
                                Permanent_Address,
                                Group,Mobile_Number,
                                Email_Address,
                                Nationality,
                                Image
                                ) VALUES (
                                '$userName',
                                '$userFatherName',
                                '$userMotherName',
                                '$userBirthdayDate',
                                '$userGender',
                                '$userCurrentAddress',
                                '$userPermanentAddress',
                                '$userGroup',
                                '$userMobileNumber',
                                '$userEmailAddress',
                                '$userNationality',
                                '$main_file'
                                )");
                                if ($insert_data) {
                                    echo '<p style="color:black;">Image uploaded successfully.</p>';
                                    header('location:apply.php');
                                }
                                else {
                                    echo '<p style="color:black;">Sorry, there was an error uploading your file.</p>';
                                }
                            }
                        }
                    }
                }
            }
        }
    ?>


    <div class="main">
        <img src="img/logo/menu-logo.png" height="40px" width="40px">
        <p><b>BHRS COLLEGE</b></p>
        <h2>Apply Form</h2>
        <h4>Fillup the form and Submit to the committee</h4>
        <hr>
        <br>

        <?php 
            if(isset($msg)){
                echo $msg;
                unset($msg);
            }
        ?>


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
            <p>12. Image: <input required type="file" name="image"></p>
            <p><input type="submit" name="btn" value="Submit"></p>
        </form>
    </div>
</body>
</html>