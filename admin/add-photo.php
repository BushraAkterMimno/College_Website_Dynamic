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
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'college_batabase';

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['btn'])) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');

    // Handle image upload
    $directory = '../img/gallery-img/';
    $target_file = $directory . basename($_FILES['img']['name']);
    $main_file = basename($_FILES['img']['name']);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file_size = $_FILES['img']['size'];

    if (empty($name)) {
        echo '<div class="alert alert-danger" role="alert">Name cannot be empty.</div>';
    } elseif (empty($_FILES['img']['tmp_name'])) {
        echo '<div class="alert alert-danger" role="alert">Please select an image.</div>';
    } elseif (file_exists($target_file)) {
        echo '<div class="alert alert-warning" role="alert">Image already exists.</div>';
    } elseif ($file_size > 2097152) { // 2MB limit
        echo '<div class="alert alert-danger" role="alert">File size is too large. Maximum size is 2MB.</div>';
    } elseif (!in_array($file_type, ['jpg', 'png'])) {
        echo '<div class="alert alert-danger" role="alert">Please select a JPG or PNG image.</div>';
    } else {
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            $stmt = $conn->prepare("INSERT INTO photo (Name, photo) VALUES (?, ?)");
            $stmt->bind_param("ss", $name, $main_file);
            if ($stmt->execute()) {
                echo '<div class="alert alert-success" role="alert">Image uploaded successfully.</div>';
                header('Location: add-photo.php');
                exit();
            } else {
                echo '<div class="alert alert-danger" role="alert">Error saving data.</div>';
            }
            $stmt->close();
        } else {
            echo '<div class="alert alert-danger" role="alert">Error uploading the file.</div>';
        }
    }
}

// Handle delete action
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = mysqli_query($conn, "SELECT photo FROM photo WHERE SL = $id");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $file_path = '../img/gallery-img/' . $row['photo'];
        if (file_exists($file_path)) {
            unlink($file_path); // Delete file from server
        }
        mysqli_query($conn, "DELETE FROM photo WHERE SL = $id");
        header("Location: add-photo.php");
        exit();
    }
}

// Fetch data to display in table
$tabledata = mysqli_query($conn, "SELECT * FROM photo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add and Delete Photo</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cdcfc18957.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        form {
            margin-top: 200px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark fixed-top nav-color">
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
</nav>

<form class="container mt-5" method="post" action="" enctype="multipart/form-data">
    <h3 class="text-center"><i>Image Upload</i></h3>
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input required type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Select Image:</label>
        <input required type="file" name="img" id="img" class="form-control">
    </div>
    <button type="submit" name="btn" class="btn btn-primary w-100">Submit</button>
</form>

<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($showdata = mysqli_fetch_assoc($tabledata)) {
                    echo '<tr>';
                    echo '<td>' . (++$i) . '</td>';
                    echo '<td>' . htmlspecialchars($showdata['Name'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td><img src="../img/gallery-img/' . htmlspecialchars($showdata['photo'], ENT_QUOTES, 'UTF-8') . '" alt="Image" style="width:100px; height:100px;"></td>';
                    echo '<td>
                        <a href="?action=delete&id=' . htmlspecialchars($showdata['SL'], ENT_QUOTES, 'UTF-8') . '" onclick="return confirm(\'Are you sure you want to delete this record?\')">
                            <i class="fa-solid fa-trash text-danger"></i>
                        </a>
                    </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
