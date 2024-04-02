
<?php
include('../include/connect.php');

if(isset($_POST['insert_package'])){
    $package_title=$_POST['Package_Title'];
    $package_description=$_POST['Description'];
    $package_keyword=$_POST['Keyword'];
    $Package_Information=$_POST['Package_Information'];

    // accessing the images
    $package_image1=$_FILES['Image1'] ['name'];
    $package_image2=$_FILES['Image2'] ['name'];
    $package_image3=$_FILES['Image3'] ['name'];

    // accessing image temp name
    $tmp_image1=$_FILES['Image1'] ['tmp_name'];
    $tmp_image2=$_FILES['Image2'] ['tmp_name'];
    $tmp_image3=$_FILES['Image3'] ['tmp_name'];

    // checking empty condition
    if($package_title=='' or $package_description=='' or $package_keyword=='' or  $package_image1=='' or $package_image2=='' or $package_image3=='' or $Package_Information==''){
        echo "<script>alert('Please Fill all the available fields')</script>";
        exit();
    }else{
        move_uploaded_file($tmp_image1,"./P_images/$package_image1");
        move_uploaded_file($tmp_image2,"./P_images/$package_image2");
        move_uploaded_file($tmp_image3,"./P_images/$package_image3");

        // insert packages
        $insert_packages="insert into `package` (Package_Title,Package_Description,Package_Keywords,Package_image1,
        Package_Image2,Package_Image3,Package_Information) values ('$package_title','$package_description','$package_keyword',' $package_image1',
        ' $package_image2',' $package_image3','$Package_Information')";
          $result_query=mysqli_query($con,$insert_packages);
          if($result_query){
          echo "<script>alert('SUCCESSFULLY INSERTED THE PACAKAGES')</script>";
          //echo"<script>Windoe.open('./home.php'.'_self')</script>";
          header('location:./');
          exit();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Pacakges- Admin Dashboard</title>
    <!-- Bootstrap Css Link --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font awesome --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css file --> 
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container">
        <u><h1 class="text-center mt-3">Insert Packages</h1></u>
        <!-- Form --> 
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Package_Title" class="form-label">Package_Title</label>
                <input type="text" name="Package_Title" id="Package_Title" class="form-control" placeholder=" Enter Package Title" autocomplete="off" required="required">
            </div>
            <!-- Description --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Description" class="form-label">Package Description</label>
                <input type="text" name="Description" id="Description" class="form-control" placeholder=" Enter Package Description" autocomplete="off" required="required">
            </div>
            <!-- Keyword --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Keyword" class="form-label">Package Keyword</label>
                <input type="text" name="Keyword" id="Keyword" class="form-control" placeholder=" Enter Package Keyword" autocomplete="off" required="required">
            </div>
            <!-- Image1 --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Image1" class="form-label">Package Image1</label>
                <input type="file" name="Image1" id="Image1" class="form-control" required="required">
            </div>
            <!-- Image2 --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Image2" class="form-label">Package Image2</label>
                <input type="file" name="Image2" id="Image2" class="form-control" required="required">
            </div>
            <!-- Image3 --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Image3" class="form-label">Package Image3</label>
                <input type="file" name="Image3" id="Image3" class="form-control" required="required">
            </div>
            <!-- Image3 --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Package_Information" class="form-label">Package Information</label>
                <input type="text" name="Package_Information" id="$Package_Information" class="form-control" placeholder="Enter the Package Information" autocomplete="off" required="required">
            </div>
            <!-- Insert button --> 
            <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_package" class="btn btn-info mb-3 px-3" value="Insert Package">
               <br>
               <a href='./' class='btn btn-secondary'>Go back</a>
            </div>
        </form>
    </div>
    
</body>
</html>
