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
    <title>Add Teacher</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nav-color {
            background-color: #b29ae1;
        }
        .nav-color img {
            margin-left: 100px;
        }
        .nav-color button {
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
        <a class="navbar-brand" href="admin.php">
            <img src="../img/logo/menu-logo.png" height="40" width="40"><b> BHRS COLLEGE</b>
        </a>
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
                    <li><a class="nav-link" href="add-notice.php">Add Notice</a></li>
                    <li><a class="nav-link" href="manage-notice.php">Manage Notice</a></li>
                    <li><a class="nav-link active" href="add-photo.php">Add & Delete Photo</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav> -->


<?php 
        if(isset($_POST['btn'])){
            // $userPhoto = $_POST['photo'];
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


        
       <div class="container">
            <h2>Add Teacher</h2>

            <?php 
            if(isset($msg)){
                echo $msg;
                unset($msg);
            }
            ?>

            <form action="" method="post">
            <div class="form-group">
                    <input type="file" class="form-control">
                </div>
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