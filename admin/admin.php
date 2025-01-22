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
    <title>Admin Page</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/cdcfc18957.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .main {
            width: 500px;
            height: 600px;
            margin: 70px auto;
            text-align: center;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
        }
        .background{
            background-image: url('../img/gallery-img/bgc-pic.png');
            background-size: cover;
            height: 560px;
            width: 460px;
            border-radius: 10px;
            /* opacity: 0.5; */
        }
        button {
            margin: 10px;
            width: 250px;
            border: 1px solid #ddd;
            background-color: transparent;
        }
        button b{
            color: white;
        }
        img{
            margin-top: 20px;
        }
        p b{
            color: white;
        }
    </style>
</head>
<body>
    <div class="main">
        <section class="background">
                <img src="../img/logo/menu-logo.png" height="50px" width="50px">
                <p><b>BHRS COLLEGE</b></p>
            <a href="add-teacher.php"><button type="button" class="btn btn-lg first_btn"><b>Add Teacher <i class="fa-solid fa-user-plus"></i></b></button></a>
            <br>
            <a href="manage-teacher.php"><button type="button" class="btn btn-lg"><b>Manage Teacher</b></button></a>
            <br>
            <a href="add-notice.php"><button type="button" class="btn btn-lg"><b>Add Notice <i class="fa-duotone fa-solid fa-file-lines"></i></b></button></a>
            <br>
            <a href="manage-notice.php"><button type="button" class="btn btn-lg"><b>Manage Notice <i class="fa-duotone fa-regular fa-memo-circle-info"></i><b></button></a>
            <br>
            <a href="add-photo.php"><button type="button" class="btn btn-lg"><b>Add & Delete Photo <i class="fa-solid fa-image"></i></b></button></a>
            <button class="logout"><a href="index.php"><b>LogOut</b></a></button>
        </section>
    </div>
</body>
</html>