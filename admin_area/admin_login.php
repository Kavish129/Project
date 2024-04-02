<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
        .img-fluid{
            width: 400px;
        }
    </style>
</head>

<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../image/login.jpg" alt="login" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="POST">
                    <div class="form-outline mb-4">
                        <label for="admin_name" class="form-label">Username</label>
                        <input type="text" id="admin_name" name="admin_name" placeholder="Enter Your Username"
                            required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="password" id="admin_password" name="admin_password" placeholder="Enter Your Password"
                            required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="button py-2 px-3 border-0" name="admin_login" value="Login">
                        <p class="small">Don't you have an account? <a href="admin_registration.php">Register</a></p>
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

<?php
include('../include/connect.php');

if(isset($_POST['admin_login'])){
    $User_Username=$_POST['admin_name'];
    $User_Password=$_POST['admin_password'];

    $select_query="Select * from `admin_table` where admin_name='$User_Username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    if($row_count>0){
        if(password_verify($User_Password,$row_data['admin_password'])){
            $_SESSION['admin_name'] = $User_Username;

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
?>
