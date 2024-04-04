<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .body{
            overflow-x: hidden;
        }
        .center-image{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            filter: blur(5px);
        }
    </style>
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New user registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- Username Field --> 
                    <div class="form-outline mb-3">
                        <label for="User_Username" class="form-label">Username</label>
                        <input type="text" id="User_Username" class="form-control" placeholder="Enter your username" 
                        autocomplete="off" required="required" name="User_Username"/>
                    </div>
                    <!-- Email Field -->
                    <div class="form-outline mb-3">
                        <label for="User_Email" class="form-label">User Email</label>
                        <input type="email" id="User_Email" class="form-control" placeholder="Enter your user email" 
                        autocomplete="off" required="required" name="User_Email"/>
                    </div>
                    <!-- Image -->
                    <div class="form-outline mb-3">
                        <label for="User_Image" class="form-label">User Image</label>
                        <input type="file" id="User_Image" class="form-control"  required="required" name="User_Image"/>
                    </div>
                    <!-- Password Field --> 
                    <div class="form-outline mb-3">
                        <label for="User_Password" class="form-label">Password</label>
                        <input type="password" id="User_Password" class="form-control" placeholder="Enter your Password" 
                        autocomplete="off" required="required" name="User_Password"/>
                    </div>
                    <!-- Confirm Password Field --> 
                    <div class="form-outline mb-3">
                        <label for="Conf_User_Password" class="form-label">Confirm Password</label>
                        <input type="password" id="Conf_User_Password" class="form-control" placeholder="Confirm Password" 
                        autocomplete="off" required="required" name="Conf_User_Password"/>
                    </div>
                    <!-- Address Field --> 
                    <div class="form-outline mb-3">
                        <label for="User_Address" class="form-label">User Address</label>
                        <input type="text" id="User_Address" class="form-control" placeholder="Enter your Address" 
                        autocomplete="off" required="required" name="User_Address"/>
                    </div>
                    <!-- Contact Field --> 
                    <div class="form-outline mb-3">
                        <label for="User_Contact" class="form-label">User Contact</label>
                        <input type="text" id="User_Contact" class="form-control" placeholder="Enter your Contact Number" 
                        autocomplete="off" required="required" name="User_Contact"/>
                    </div>
                    <div class="text-center mt-4 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="User_Register">
                        <p>Already Have An Account?<a href="user_login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <img src="../image/logo1.jpg" alt="logo1" class="center-image">
</body>
</html>

<!-- php code --> 
<?php
include('../include/connect.php');
if(isset($_POST['User_Register'])){
    $User_Username=$_POST['User_Username'];
    $User_Email=$_POST['User_Email'];
    $User_Password=$_POST['User_Password'];
    $hash_password=password_hash($User_Password,PASSWORD_DEFAULT);
    $Conf_User_Password=$_POST['Conf_User_Password'];
    $User_Address=$_POST['User_Address'];
    $User_Contact=$_POST['User_Contact'];
    $User_Image=$_FILES['User_Image']['name'];
    $User_Image_tmp=$_FILES['User_Image']['tmp_name'];
    
    //Select Query
    $select_query="Select * from `user_table` where Username='$User_Username'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo"<script>alert('Data already present or exists')</script>";
    }elseif ($User_Password!=$Conf_User_Password) {
        echo"<script>alert('Passwords doesn't match')</script>";
    } else{
        // insert query
    move_uploaded_file($User_Image_tmp,"./user_images/$User_Image");
    $insert_query="insert into `user_table` (Username,Email,user_password,user_image,user_address,User_mobile) 
    values('$User_Username',' $User_Email','$hash_password','$User_Image',' $User_Address','$User_Contact')";
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