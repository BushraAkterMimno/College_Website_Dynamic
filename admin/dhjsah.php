<?php 
require 'db.php';
session_start();

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Generate CSRF token for the form
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
    if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }

    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars(trim($_POST['description']), ENT_QUOTES, 'UTF-8');
    $fb_link = filter_var(trim($_POST['fb_link']), FILTER_SANITIZE_URL);
    $x_link = filter_var(trim($_POST['x_link']), FILTER_SANITIZE_URL);
    $mobile_number = htmlspecialchars(trim($_POST['mobile_number']), ENT_QUOTES, 'UTF-8');
    $designation = htmlspecialchars(trim($_POST['designation']), ENT_QUOTES, 'UTF-8');
    $pub_info = intval($_POST['pub_info']);
    $photo = $_FILES['photo'];
    $msg = "";

    if (!empty($name) && !empty($photo['tmp_name'])) {
        $target_dir = '../img/';
        $image_file_type = strtolower(pathinfo($photo['name'], PATHINFO_EXTENSION));
        $unique_name = uniqid() . "." . $image_file_type;
        $target_file = $target_dir . $unique_name;
        $allowed_types = ['image/jpeg', 'image/png'];
    
        if (!in_array(mime_content_type($photo['tmp_name']), $allowed_types)) {
            $msg = '<p class="alert alert-danger">Only JPG and PNG files are allowed.</p>';
        } elseif ($photo['size'] > 2097152) {
            $msg = '<p class="alert alert-danger">Image size exceeds 2MB limit.</p>';
        } elseif (!move_uploaded_file($photo['tmp_name'], $target_file)) {
            $msg = '<p class="alert alert-danger">Failed to upload image.</p>';
        } else {
            $stmt = $conn->prepare("INSERT INTO teachers_information (name, description, fb_link, x_link, mobile_number, designation, photo, pub_info) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
            if (!$stmt) {
                error_log("SQL prepare error: " . $conn->error, 3, 'error.log');
                die('<p class="alert alert-danger">Database error occurred. Check the error log for details.</p>');
            }
    
            $stmt->bind_param("ssssssis", $name, $description, $fb_link, $x_link, $mobile_number, $designation, $unique_name, $pub_info);
    
            if ($stmt->execute()) {
                $msg = '<p class="alert alert-success">Teacher added successfully.</p>';
            } else {
                error_log("Database error: " . $stmt->error, 3, 'error.log');
                $msg = '<p class="alert alert-danger">Database insertion failed.</p>';
            }
            $stmt->close();
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nav-color {
            background-color: #b29ae1;
        }
        .container {
            margin-top: 80px;
        }
        .form-group {
            margin: 10px;
        }
        .logout {
            float: right;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: red;
        }
        button a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Teacher</h2>

        <?php 
        if (isset($msg)) {
            echo $msg;
            unset($msg);
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="fb_link">Facebook Profile Link:</label>
                <input type="url" id="fb_link" name="fb_link" class="form-control" placeholder="Facebook Profile Link">
            </div>
            <div class="form-group">
                <label for="x_link">X Profile Link:</label>
                <input type="url" id="x_link" name="x_link" class="form-control" placeholder="X Profile Link">
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number:</label>
                <input type="number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Mobile Number" required pattern="\d{10}">
            </div>
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" id="designation" name="designation" class="form-control" placeholder="Designation" required>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pub_info">Publish Information:</label>
                <select class="form-control" id="pub_info" name="pub_info" required>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="btn">Add Teacher</button>
        </form>
        <button class="logout"><a href="index.php"><b>LogOut</b></a></button>
    </div>
    
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>






<?php 
        if(isset($_POST['btn'])){
            $userPhoto = $_POST['photo'];
            $userName = $_POST['name'];
            $userDescription = $_POST['description'];
            $userFbLink = $_POST['fb_link'];
            $userXLink = $_POST['x_link'];
            $userMobileNumber = $_POST['mobile_number'];
            $userDesignation = $_POST['designation'];
            $userPubInfo = $_POST['pub_info'];

            $sql = "INSERT INTO teachers_information (
            photo,
            name,
            description,
            fb_link,
            x_link,
            mobile_number,
            designation,
            pub_info
            ) VALUES (
            '$userPhoto ',
            '$userName',
            '$userDescription',
            '$userFbLink',
            '$userMobileNumber',
            '$userDesignation',
            '$userPubInfo'
            )";

            $insertdata = mysqli_query($conn,$sql);
            if($insertdata){
                $msg = "Data Insert Successfully";
            }
        }
        ?>




<?php 
            if(isset($msg)){
                echo $msg;
                unset($msg);
            }
            ?>