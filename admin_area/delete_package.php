<?php
if(isset($_GET['delete_package'])){
    $delete_id=$_GET['delete_package'];

    $delete_package="Delete from `package` where P_ID=$delete_id";
    $reslt=mysqli_query($con,$delete_package);
    if($reslt){
        echo"<script>alert('Product Deleted Successfully')</script>";
        //echo"<script>Windoe.open('./home.php'.'_self')</script>";
        header('location:./');
        exit();
    }
}
?>