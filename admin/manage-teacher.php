<?php require 'db.php' 
?>
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
if (isset($_GET['action']) == 'delete' ) {
  {
    $id = $_GET['id'];

    $sql = "DELETE FROM teachers_information WHERE Teachers_ID = '$id'";
    $delete_item = mysqli_query($conn,$sql);
    if (isset($delete_item)){
      echo 'Data Delete Successfully';
      header('location:manage-teacher.php');
    }
  }
}   
?>

<?php 
$tabledata = mysqli_query($conn, "SELECT * FROM teachers_information");
if (!$tabledata) {
    die("Error fetching data: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Teacher</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cdcfc18957.js" crossorigin="anonymous"></script>
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
            margin-left: 800px;
            /* color: white; */
        }
        .logout{
                /* color: white; */
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
        h2{
          margin-top: 100px;
        }
        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
        .fa-trash {
            color: red;
        }
        .fa-pen-to-square {
            color: blue;
        }
        a {
            margin: 0 5px;
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
                        <li><a class="nav-link active" href="manage-teacher.php">Manage Teacher</a></li>
                        <li><a class="nav-link" href="add-notice.php">Add Notice</a></li>
                        <li><a class="nav-link" href="manage-notice.php">Manage Notice</a></li>
                        <li><a class="nav-link" href="add-photo.php">Add & Delete Photo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<h2 style="text-align:center;">Teacher's Information Table</h2>
<table id="content" border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
    <thead>
        <tr>
            <th>Teacher Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Photo</th>
            <th>Pub Info</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $i = 0; 
        while ($show_data = mysqli_fetch_assoc($tabledata)) { ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo htmlspecialchars($show_data['Name'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($show_data['Designation'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td>
                    <img src="../img/<?php echo htmlspecialchars($show_data['image'], ENT_QUOTES, 'UTF-8'); ?>" 
                         alt="Image" 
                         style="width:100px; height:100px; object-fit:cover;">
                </td>
                <td>
                  <?php if ($show_data['Pub_info'] == 1) {
                    echo '<p style="color:green;">Published</p>';
                  } else {
                    echo '<p style="color:red;">Unpublished</p>';
                  } ?>
                </td>

                <td>
                    <!-- Edit Link -->
                  <a href="edit-teacher.php?id=<?php echo htmlspecialchars($show_data['Teachers_ID'], ENT_QUOTES, 'UTF-8'); ?>">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <!-- Delete Link -->
                    <a href="?action=delete&id=<?php echo $show_data['Teachers_ID']; ?>">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>