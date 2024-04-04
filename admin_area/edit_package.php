<?php 
if(isset($_GET['edit_package'])){
    $edit_id=$_GET['edit_package'];
    echo $edit_id;
    $get_data="Select * from `package` where P_Id=$edit_id";
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $Package_Title=$row['Package_Title'];
    $Package_Description=$row['Package_Description'];
    $Package_Keyword=$row['Package_Keywords'];
    $package_image1=trim($row['Package_image1']);
    $Package_Image2=trim($row['Package_Image2']);
    $Package_Image3=trim($row['Package_Image3']);
    $Link=$row['Link'];
}
?>
<div class="container mt-3">
    <h3 class="text-center">Edit Packages</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-3">
            <label for="Package_Title" class="form-lable">Package Title</label>
            <input type="text" id="Package_Title" value="<?php echo $Package_Title;?>" name="Package_Title" class="form-control" 
            placeholder="Enter the Package Title">
        </div>
        <div class="form-outline w-50 m-auto mb-3">
            <label for="Package_Description" class="form-lable">Packag Description</label>
            <input type="text" id="Package_Description" value="<?php echo $Package_Description;?>" name="Package_Description" class="form-control" 
            placeholder="Enter the Package Description">
        </div>
        <div class="form-outline w-50 m-auto mb-3">
            <label for="Package_Keywords" class="form-lable">Package Keywords</label>
            <input type="text" id="Package_Keywords" value="<?php echo $Package_Keyword;?>" name="Package_Keywords" class="form-control" 
            placeholder="Enter the Package Keywords">
        </div>
        <div class="form-outline w-50 m-auto mb-3">
            <label for="Package_image1" class="form-lable">Package Image1</label>
            <div class="d-flex">
                <input type="file" id="Package_image1" name="Package_image1" class="form-control w-90" 
                placeholder="Enter the Package image1">
                <img src="./P_images/<?php echo $package_image1;?>" alt="..." class="edit_image">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-3">
            <label for="Package_image2" class="form-lable">Package Image2</label>
            <div class="d-flex">
                <input type="file" id="Package_image2"  name="Package_image2" class="form-control w-90" 
                placeholder="Enter the Package image2">
                <img src="./P_images/<?php echo $Package_Image2;?>" alt="..." class="edit_image">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-3">
            <label for="Package_image3" class="form-lable">Package Image3</label>
            <div class="d-flex">
                <input type="file" id="Package_image3"  name="Package_image3" class="form-control w-90" 
                placeholder="Enter the Package image3">
                <img src="./P_images/<?php echo $Package_Image3;?>" alt="..." class="edit_image">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-3">
            <label for="Link" class="form-lable">Link</label>
            <input type="text" id="Link" value="<?php echo $Link;?>" name="Link" class="form-control" 
            placeholder="Enter the Link">
        </div>
        <div class=" w-50 m-auto text-dark">
            <input type="Submit" name="edit_package" value="Update Package">
            <a href='./' class='btn btn-secondary m-3'>Go back</a>
        </div>
    </form>
</div>

<?php
if(isset($_POST['edit_package'])){
    $Package_Title=$_POST['Package_Title'];
    //$Package_Description=$_POST['Package_Description'];
    $Package_Keyword=$_POST['Package_Keywords'];
    $Link=$_POST['Link'];

    $package_image1=$_FILES['Package_image1']['name'];
    $Package_Image2=$_FILES['Package_image2']['name'];
    $Package_Image3=$_FILES['Package_image3']['name'];

    $tp_image1=$_FILES['Package_image1']['tmp_name'];
    $tp_Image2=$_FILES['Package_image2']['tmp_name'];
    $tp_Image3=$_FILES['Package_image3']['tmp_name'];

    if($Package_Title=='' or $Package_Description=='' or $Package_Keyword=='' or $package_image1=='' or 
    $Package_Image2=='' or $Package_Image3==''){
        echo"<script>alert('Please Enter all the fields of the form')</script>";
    }else{
        move_uploaded_file($tp_image1,"./P_images/$package_image1");
        move_uploaded_file($tp_Image2,"./P_images/$Package_Image2");
        move_uploaded_file($tp_Image3,"./P_images/$Package_Image3");

        // update query
        $update_package="update `package` set Package_Title='$Package_Title',Package_Description='$Package_Description',
        Package_Keywords='$Package_Keyword',Package_image1='$package_image1',Package_Image2='$Package_Image2',Package_Image3='$Package_Image3',
        Link='$Link' where P_ID='$edit_id'";

        $result_update=mysqli_query($con,$update_package);
        if($result_update){
            echo"<script>alert('Package Updated Successfully')</script>";
            //echo"<script>Windoe.open('./insert_package.php'.'_self')</script>";
        }
    }
}
?>
