<?php require 'db.php'; 
$sl = mysqli_real_escape_string($conn, $_GET['sl']);
$sql = "SELECT * FROM notice WHERE SL='$sl'";
$notice_data = mysqli_query($conn,$sql);
$notice_show_data = mysqli_fetch_assoc($notice_data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
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
        .nav-color .logout{
            margin-left: 830px;
        }
    </style>
</head>
<body>
<?php 
        if (isset($_POST['btn'])) {
            $headline = mysqli_real_escape_string($conn, $_POST['headline']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
        
            // File Upload
            if ($_FILES['image']['name']) {
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($image_tmp, "uploads/$image");
            } else {
                $image = $notice_show_data['image']; 
            }

            $sql = "UPDATE notice SET name='$headline', description='$description', image='$image' WHERE SL='$sl'";
            $updatedata = mysqli_query($conn, $sql);
            if($updatedata){
                $msg = "Data Update Successfully";
                header('refresh: 2, url=view.php');
            }
        }
    ?>

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
                        <li><a class="nav-link" href="add-notice.php">Add Notice</a></li>
                        <li><a class="nav-link active" href="manage-notice.php">Manage Notice</a></li>
                        <li><a class="nav-link" href="add-photo.php">Add & Delete Photo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
        
       <div class="container">
            <h2>Edit Notice</h2>

            <?php 
            if(isset($msg)){
                echo $msg;
                unset($msg);
            }
            ?>

            <form action="" method="post">
                <div class="form-group">
                    <input type="text" value="<?php echo $notice_show_data['name']; ?>" name="headline" class="form-control"  placeholder="Headline">
                </div>
                <div class="form-group">
                <textarea class="form-control" name="description" rows="3" value="<?php echo $notice_show_data['description']; ?>"></textarea>
                </div>
                <div class="form-group">
                <input type="file" value="<?php echo $notice_show_data['image']; ?>" name="image" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit" name="btn">Update Notice</button>
        
            </form>
    

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>