<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .body{
            
        }
        .center-image {
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
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- Username Field --> 
                    <div class="form-outline mb-3">
                        <label for="User_Username" class="form-label">Username</label>
                        <input type="text" id="User_Username" class="form-control" placeholder="Enter your username" 
                        autocomplete="off" required="required" name="User_Username"/>
                    </div>
                    <!-- Password Field --> 
                    <div class="form-outline mb-3">
                        <label for="User_Password" class="form-label">Password</label>
                        <input type="password" id="User_Password" class="form-control" placeholder="Enter your Password" 
                        autocomplete="off" required="required" name="User_Password"/>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="User_Login"><br>
                        <a href="Forgot Password.php">Forgot Password</a>
                        <p  class="text-dark">Don't Have An Account?<a href="user_registration.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Centered Image -->
    <img src="../image/logo1.jpg" alt="logo1" class="center-image">
</body>
</html>
<?php
session_start();
include('../include/connect.php');

if(isset($_POST['User_Login'])){
    $User_Username=$_POST['User_Username'];
    $User_Password=$_POST['User_Password'];

    $select_query="Select * from `user_table` where Username='$User_Username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    if($row_count>0){
        if(password_verify($User_Password,$row_data['user_password'])){
            $_SESSION['username'] = $User_Username;

            // echo"<script>Window.open=('index.php')</script>";
            echo"<script>alert('Login successfully')</script>";
            header("Location: ../");
            exit();
        }else{
            echo"<script>alert('Invalid Credentials')</script>";
        }
    }else{
        echo"<script>alert('Invalid Credentials')</script>";
    } 
}
session_abort();
?>