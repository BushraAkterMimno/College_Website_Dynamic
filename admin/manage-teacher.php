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

<h2 style="text-align:center;">Teacher Information</h2>
    <table id="content">
        <tr align="center">
            <th>Teacher Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Public Info</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
        <?php 
        $i = 0;
        if (mysqli_num_rows($table_data) > 0) {
            while ($show_data = mysqli_fetch_assoc($table_data)) { 
        ?>
        <tr align="center">
            <td><?php echo ++$i; ?></td>
            <td><?php echo htmlspecialchars($show_data['Name']); ?></td>
            <td><?php echo htmlspecialchars($show_data['Designation']); ?></td>
            <td>
                <?php echo $show_data['Pub_Info'] == 1 ? 'Published' : 'Unpublished'; ?>
            </td>
            <td><?php echo htmlspecialchars($show_data['photo']); ?></td>
            <td>
                <a href="?action=delete&id=<?php echo htmlspecialchars($show_data['Member_Id']); ?>" onclick="return confirm('Are you sure you want to delete this record?')">
                    <i class="fa-solid fa-trash"></i>
                </a>
                <a href="edit.php?s_id=<?php echo htmlspecialchars($show_data['Member_Id']); ?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
        </tr>
        <?php 
            } 
        } else { 
        ?>
        <tr>
            <td colspan="5" align="center">No records found</td>
        </tr>
        <?php } ?>
    </table>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>