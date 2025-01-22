<?php 
require 'db.php';

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
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
        $target_dir = 'img/faculty-img/';
        $target_file = $target_dir . basename($photo['name']);
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (!in_array($image_file_type, ['jpg', 'png'])) {
            $msg = '<p class="alert alert-danger">Only JPG and PNG files are allowed.</p>';
        } elseif ($photo['size'] > 2097152) {
            $msg = '<p class="alert alert-danger">Image size exceeds 2MB limit.</p>';
        } elseif (file_exists($target_file)) {
            $msg = '<p class="alert alert-warning">File already exists. Please rename and try again.</p>';
        } elseif (!move_uploaded_file($photo['tmp_name'], $target_file)) {
            $msg = '<p class="alert alert-danger">Failed to upload image.</p>';
        } else {
            $stmt = $conn->prepare("INSERT INTO teachers_information (name, description, fb_link, x_link, mobile_number, designation, photo, pub_info) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssss", $name, $description, $fb_link, $x_link, $mobile_number, $designation, $photo['name'], $pub_info);
            
            if ($stmt->execute()) {
                $msg = '<p class="alert alert-success">Teacher added successfully.</p>';
            } else {
                error_log("Database error: " . $stmt->error);
                $msg = '<p class="alert alert-danger">Database insertion failed.</p>';
            }
            $stmt->close();
        }
    } else {
        $msg = '<p class="alert alert-danger">Please fill in all required fields.</p>';
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
        .nav-color{
            background-color: #b29ae1;
        }
        .nav-color img{
            margin-left: 100px;
        }
        .nav-color button{
            margin-right: 120px;
            color: white;
        }
            .container{
                margin-top: 80px;
            }
            .form-group{
                margin: 10px
            }
            a .fa-trash{
                color: red;
            }
            .logout{
                float: right;
                padding: 10px;
                border-radius: 5px;
                border: none;
                background-color: red;
            }
            button a{
                text-decoration: none;
                color: white;
            }
        </style>
</head>
<body>
    
    <nav class="navbar navbar-dark fixed-top nav-color">
      <div class="container-fluid">
        <a class="navbar-brand" href="admin.php"><img src="../img/logo/menu-logo.png" height="40px" width="40px"><b>  BHRS COLLEGE</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">BHRS COLLEGE</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="add-teacher.php">Add Teacher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manage-teacher.php">Manage Teacher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add-notice.php">Add Notice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manage-notice.php">Manage Notice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add-photo.php">Add & Delete Photo</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

        
       <div class="container">
            <h2>Add New Teacher</h2>

            <?php 
            if(isset($msg)){
                echo $msg;
                unset($msg);
            }
            ?>

            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control"  placeholder="Name">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="fb_link" class="form-control"  placeholder="Facebook Profile Link">
                </div>
                <div class="form-group">
                    <input type="text" name="x_link" class="form-control"  placeholder="X Profile Link">
                </div>
                <div class="form-group">
                    <input type="number" name="mobile_number" class="form-control"  placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    <input type="text" name="designation" class="form-control"  placeholder="Designation">
                </div>
                <div class="form-group">
                    <input type="file" name="photo" class="form-control">
                </div>
                
                <div class="form-group">
                    <select class="form-control" name="pub_info">
                        <option value="1">Published</option>
                        <option value="0">UnPublished</option>
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