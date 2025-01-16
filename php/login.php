<?php 
session_start();
require 'db.php';
$sql= "SELECT * FROM login";
$query= mysqli_query($conn,$sql);
$login_info = mysqli_fetch_assoc($query);
$admin_email = $login_info['Email'];
$password = $login_info['Password'];
if(isset($_POST['btn'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $main_pass = md5($pass);

    $_SESSION["admin_id"] = $login_info['SL'];
    $_SESSION["admin_name"] = $login_info['Name'];

    if($admin_email==$email && $password==$main_pass){
        header('location:admin.php');
    }
    else{
        echo 'Invalid email or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            text-align: center;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            background: #f9f9f9;
        }
        input[type="email"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form method="post" action="">
            <input type="email" name="email" required placeholder="Enter Your Email">
            <input type="password" name="password" required placeholder="Enter Your Password">
            <input type="submit" name="btn" value="Login">
        </form>
    </div>
</body>
</html>
