<?php require 'db.php' 
$student_sl = $_GET['s_id'];
$sql = "SELECT * FROM team_member_info WHERE Member_Id='$student_sl'";
$s_data = mysqli_query($conn,$sql);
$s_show_data = mysqli_fetch_assoc($s_data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php 
        if(isset($_POST['btn'])){
            $userName = $_POST['name'];
            $userDescription = $_POST['description'];
            $userDesignation = $_POST['designation'];
            $userMobileNumber = $_POST['mobile_number'];
            $userFbLink = $_POST['fb_link'];
            $userPubInfo = $_POST['pub_info'];

            $sql = "Update team_member_info SET name='$userName',description='$userDescription',designation='$userDesignation',mobile_number='$userMobileNumber',fb_link='$userFbLink',pub_info='$userPubInfo' WHERE Member_Id='$student_sl'";

            $updatedata = mysqli_query($conn,$sql);
            if($updatedata){
                $msg = "Data Update Successfully";
                header('refresh: 2, url=view.php');
            }
        }
    ?>
        
       <div class="container">
            <h2>Edit Team Member Info</h2>

            <?php 
            if(isset($msg)){
                echo $msg;
                unset($msg);
            }
            ?>

            <form action="" method="post">
                <div class="form-group">
                    
                    <input type="text" value="<?php echo $s_show_data['name']; ?>" name="name" class="form-control"  placeholder="Name">
                </div>
                <div class="form-group">
                    
                    <textarea class="form-control" name="description" rows="3" value="<?php echo $s_show_data['description']; ?>" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    
                    <input type="text" value="<?php echo $s_show_data['designation']; ?>" name="designation" class="form-control"  placeholder="Designation">
                </div>
                 <div class="form-group">
                    
                    <input type="number" value="<?php echo $s_show_data['mobile_number']; ?>" name="mobile_number" class="form-control"  placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    
                    <input type="text" value="<?php echo $s_show_data['fb_link']; ?>" name="fb_link" class="form-control"  placeholder="Facebook Profile Link">
                </div>
                <div class="form-group">
                    <select class="form-control" name="pub_info">
                        <option value="1">Published</option>
                        <option value="0">UnPublished</option>
                    </select>
                
                </div>
                <button class="btn btn-primary" type="submit" name="btn">Add Member</button>
        
            </form>
    

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>