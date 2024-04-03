<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../image/admin.jpg" alt="admin" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="POST">
                    <div class="form-outline mb-4">
                        <label for="admin_name" class="form-label">Username</label>
                        <input type="text" id="admin_name" name="admin_name" placeholder="Enter Your Usernmae"
                            required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" id="Email" name="Email" placeholder="Enter Your Email"
                            required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="password" id="admin_password" name="admin_password" placeholder="Enter Your Password"
                            required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Your Confirm Password"
                            required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="button py-2 px-3 border-0" name="admin_registration" value="Register">
                        <p class="small">Do you have an account? <a href="admin_login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>

<!-- php code --> 
<?php
include('../include/connect.php');
if(isset($_POST['admin_registration'])){
    $User_Username=$_POST['admin_name'];
    $User_Email=$_POST['Email'];
    $User_Password=$_POST['admin_password'];
    $hash_password=password_hash($User_Password,PASSWORD_DEFAULT);
    $Conf_User_Password=$_POST['confirm_password'];
    
    //Select Query
    $select_query="Select * from `admin_table` where admin_name='$User_Username'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo"<script>alert('Data already present or exists')</script>";
    }elseif ($User_Password!=$Conf_User_Password) {
        echo"<script>alert('Passwords doesn't match')</script>";
    } else{
        // insert query
    $insert_query="insert into `admin_table` (admin_name,Email,admin_password) 
    values('$User_Username',' $User_Email','$hash_password')";
    $sql_execute=mysqli_query($con,$insert_query);
    if($sql_execute){
        echo"<script>alert('Data inserted successfully')</script>";
    }else{
        die(mysqli_error($con));
    }
    }
    // insert query
   /* move_uploaded_file($User_Image_tmp,'./user_images/$User_Image');
    $insert_query="insert into `user_table` (Username,Email,user_password,user_image,user_address,User_mobile) 
    values('$User_Username',' $User_Email','$User_Password','$User_Image',' $User_Address','$User_Contact')";
    $sql_execute=mysqli_query($con,$insert_query);
    if($sql_execute){
        echo"<script>alert('Data inserted successfully')</script>";
    }else{
        die(mysqli_error($con));
    }*/
}
?>