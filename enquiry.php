<?php
include ('./include/connect.php');
if (isset($_POST['insert_Enquiry'])) {
    $Enquiry_Name = $_POST['Enquiry_Name'];
    $Email = $_POST['Email'];
    $Place = $_POST['Place'];
    $Contact = $_POST['Contact'];

    if ($Enquiry_Name == '' or $Email == '' or $Place == '') {
        echo "<script>alert('Please Fill all the available fields')</script>";
        exit();
    }

    $insert_Enquiry = "insert into `enquiry`(Enquiry_Name,Email,Place,Contact) 
    values('$Enquiry_Name','$Email','$Place','$Contact')";
    $result_query = mysqli_query($con, $insert_Enquiry);
    if ($result_query) {
        echo "<script>alert('SUCCESSFULLY INSERTED THE ENQURIES')</script>";
    }
    // if($insert_Enquiry==TRUE){
    //  $to_email="jkavish575@gmail.com";
    //  $subject="New Enquiry from R.R. Tours and travels";
    //  $body="Name:$Enquiry_Name \n Email:$Email \n Place:$Place";
    //  $headers="From:$Email";

    //  if(mail($to_email,$subject,$body,$headers)){
    //      echo"Enquiry sent successfully";
    //  }else{
    //      echo"Error sendingg the enquiry";
    ///  }
    // }else{
    //  echo"Error:" .$insert_Enquiry. "<br>" . $con->error;
    // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
    <!-- Bootstrap Css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .body {
            overflow-x: hidden;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <u>
            <h1 class="text-center mt-3">Enquiry Form</h1>
        </u>
        <!-- Form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Enquiry_Name" class="form-label">Enquiry_Name</label>
                <input type="text" name="Enquiry_Name" id="Enquiry_Name" class="form-control"
                    placeholder=" Enter enquirer Name" autocomplete="off" required="required">
            </div>
            <!-- Email -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Email" class="form-label">Email</label>
                <input type="text" name="Email" id="Email" class="form-control" placeholder=" Enter Email"
                    autocomplete="off" required="required">
            </div>
            <!-- Places to visit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Place" class="form-label">Place</label>
                <input type="text" name="Place" id="Place" class="form-control" placeholder=" Enter the Place to visit"
                    autocomplete="off" required="required">
            </div>
            <!-- Contact -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Contact" class="form-label">Contact</label>
                <input type="varchar(10)" name="Contact" id="Contact"class="form-control" placeholder="Enter Contact"
                    autocomplete="off" required="required">
            </div>
            <!-- Insert button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_Enquiry" class="btn btn-info mb-3 px-3" value="Insert Enquiry">
                <a href='./' class='btn btn-secondary m-3'>Go back</a>
            </div>
        </form>
    </div>
</body>

</html>