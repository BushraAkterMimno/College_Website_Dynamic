<?php require 'db.php' ?>
<?php 
session_start();
if(isset($_GET['logout'])){
    unset($_SESSION["admin_id"]);
    unset($_SESSION["admin_name"]);
    header('location:index.php');
}
if(isset($_SESSION["admin_id"])==false){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notice</title>
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
        .nav-color .logout{
            margin-left: 830px;
        }
        .container{
          margin-top: 100px;
        }
        .form-group{
            margin: 10px
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
            <a class="navbar-brand" href="admin.php">
                <img src="../img/logo/menu-logo.png" height="40" width="40"><b> BHRS COLLEGE</b>
            </a>
            <button class="logout"><a href="index.php"><b>LogOut</b></a></button>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" id="offcanvasDarkNavbar">
                <div class="offcanvas-header">
                    <h5>BHRS COLLEGE</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="add-teacher.php">Add Teacher</a></li>
                        <li><a class="nav-link" href="manage-teacher.php">Manage Teacher</a></li>
                        <li><a class="nav-link active" href="add-notice.php">Add Notice</a></li>
                        <li><a class="nav-link" href="manage-notice.php">Manage Notice</a></li>
                        <li><a class="nav-link" href="add-photo.php">Add & Delete Photo</a></li>
                        <li><a class="nav-link" href="apply-table.php">Apply Table</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <?php 
        if (isset($_POST['btn'])) {
          $headline = $_POST['headline'];
          $description = $_POST['description'];
      
          // handle the image upload
          $directory = '../img/';
          $target_file = $directory . basename($_FILES['img']['name']);
          $main_file = basename($_FILES['img']['name']);
          $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
          $file_size = $_FILES['img']['size'];
          $img = $_FILES['img']['tmp_name'];
      
          if (empty($img)) {
              echo '<p>Please select an image.</p>';
          }
          else{
              if (file_exists($target_file)) {
                  echo '<p>Image already exists.</p>';
              }
              else {
                  if ($file_size > 2097152) { // 2MB limit
                      echo '<p>File size is too large. Maximum size is 2MB.</p>';
                  }
                  else {
                      if ($file_type != 'jpg' && $file_type != 'png') {
                          echo '<p>Please select a JPG or PNG image.</p>';
                      }
                      else {
                          // move the uploaded file to the target directory
                          if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                              // insert data into the database
                              $insert_data = mysqli_query($conn, "INSERT INTO notice  (
                              Headline,
                              Description,
                              image
                              ) VALUES (
                              '$headline',
                               '$description',
                               '$main_file'
                               )");
                              if ($insert_data) {
                                  echo '<p>Image uploaded successfully.</p>';
                                  header('location:add-notice.php');
                              }
                              else {
                                  echo '<p>Sorry, there was an error uploading your file.</p>';
                              }
                          }
                      }
                  }
              }
          }
      }
    ?>
        
       <div class="container">
            <h2>Add Notice</h2>

            <?php 
            if(isset($msg)){
                echo $msg;
                unset($msg);
            }
            ?>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="headline" class="form-control"  placeholder="Headline">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="img" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit" name="btn">Add Notice</button>
            </form>
            <button class="logout"><a href="index.php"><b>LogOut</b></a></button>
            
        </div>




<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>