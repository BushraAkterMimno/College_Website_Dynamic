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
<!-- <nav class="navbar navbar-dark fixed-top nav-color">
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
</nav> -->


<?php 
        if(isset($_POST['btn'])){
            $userHeadline = $_POST['headline'];
            $userDescription = $_POST['description'];
            $userImage = $_POST['image'];

            $sql = "INSERT INTO notice (headline,description,image,,) VALUES ('$userHeadline','$userDescription','$userImage')";

            $insertdata = mysqli_query($conn,$sql);
            if($insertdata){
                $msg = "Data Insert Successfully";
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

            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="headline" class="form-control"  placeholder="Headline">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="designation" class="form-control"  placeholder="Image">
                </div>
                <button class="btn btn-primary" type="submit" name="btn">Add Notice</button>
            </form>
            <button class="logout"><a href="index.php"><b>LogOut</b></a></button>
            
        </div>




<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>