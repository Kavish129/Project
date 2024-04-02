<?php
include('../include/connect.php');
include('user_login.php');

if(isset($_POST['submit'])){
    $User_Username = $_POST['User_Username'];

    $select_query = "SELECT * FROM `user_table` WHERE Username='$User_Username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);

    if($row_count > 0){
        // Send password recovery instructions to the user
        $email = $row_data['email']; // Assuming email field exists in user_table
        $recovery_token = generateRandomString(); // Generate a random string as recovery token
        // Store the recovery token in the database for future verification
        $update_query = "UPDATE `user_table` SET recovery_token='$recovery_token' WHERE Username='$User_Username'";
        mysqli_query($con, $update_query);

        // Here you can implement the logic to send an email to the user with the recovery token
        // Example: mail($email, "Password Recovery", "Your recovery token is: $recovery_token");

        echo "<script>alert('Password recovery instructions sent to your email.');</script>";
    }else{
        echo "<script>alert('User not found. Please enter a valid username.');</script>";
    }
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
