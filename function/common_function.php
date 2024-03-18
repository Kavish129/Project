<?php
include('./include/connect.php');

//getting pacakages
function getpackages(){
    global $con;
    $select_query="Select * from `package`order by rand() limit 0,6";
  $result_query=mysqli_query($con,$select_query);
  // $row=mysqli_fetch_assoc($result_query);
  //echo $row['Package_Title'];
  while($row=mysqli_fetch_assoc($result_query)){
    $P_ID=$row['P_ID'];
    $Package_Title=$row['Package_Title'];
    $Package_Description=$row['Package_Description'];
    $Package_Image1= trim($row['Package_Image2']);
    echo"<div class='col-md-4 mb-2'>
    <div class='card'>
       <img src='./admin_area/P_images/$Package_Image1' class='card-img-top' alt='$Package_Title'>
       <div class='card-body'>
        <h5 class='card-title'>$Package_Title</h5>
        <p class='card-text'>$Package_Description</p>
        <a href='#' class='btn btn-info'>Enquiry Now</a>
        <a href='PackageInfo.php?P_ID=$P_ID' class='btn btn-secondary'>Package Info</a>
      </div>
    </div>  
  </div>";
  }
}

// searching product function

function search_package(){
  global $con;
  if(isset($_GET['search_data_package'])){
    $search_data_value=$_GET['search_data'];
  $search_query="Select * from `package` where 	Package_Keywords like'%$search_data_value%'";
  $result_query=mysqli_query($con,$search_query);
  // $row=mysqli_fetch_assoc($result_query);
  //echo $row['Package_Title']; 
  while($row=mysqli_fetch_assoc($result_query)){
    $P_ID=$row['P_ID'];
    $Package_Title=$row['Package_Title'];
    $Package_Description=$row['Package_Description'];
    $Package_Image1= trim($row['Package_Image2']);
    echo"<div class='col-md-4 mb-2'>
    <div class='card'>
       <img src='./admin_area/P_images/$Package_Image1' class='card-img-top' alt='$Package_Title'>
       <div class='card-body'>
        <h5 class='card-title'>$Package_Title</h5>
        <p class='card-text'>$Package_Description</p>
        <a href='#' class='btn btn-info'>Enquiry Now</a>
        <a href='PackageInfo.php?P_ID=$P_ID' class='btn btn-secondary'>Package Info</a>
      </div>
    </div>
  </div>";
  }
}
}

// Package information

function package_info(){
  global $con;
  if(isset($_GET['P_ID'])){
    $package_id=$_GET['P_ID'];
  $select_query="Select * from `package` where P_ID=$package_id";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $P_ID=$row['P_ID'];
  $Package_Title=$row['Package_Title'];
  $Package_Description=$row['Package_Description'];
  $Package_Image1= trim($row['Package_Image2']);
  $Package_Image2= trim($row['Package_image1']);
  $Package_Image3= trim($row['Package_Image3']);
  echo"<div class='row px-4'>
  <div class='col-md-4'>
      <!-- card -->
      <div class='card'>
         <img src='./admin_area/P_images/$Package_Image1' class='card-img-top' alt='$Package_Title'>
         <div class='card-body'>
         <h5 class='card-title'>$Package_Title</h5>
         <p class='card-text'>$Package_Description</p>
         <a href='#' class='btn btn-info'>Enquiry Now</a>
         <a href='PackageInfo.php?P_ID=$P_ID' class='btn btn-secondary'>Package Info</a>
      </div>
  </div>
</div>
<div class='col-md-8'>
  <!-- related images -->
  <div class='row'>
    <div class='col-md-12'>
      <h4 class='text-center text-info mb-5'>Related Images</h4>
     </div>
    <div class='col-md-6'>
      <img src='./admin_area/P_images/$Package_Image2' class='card-img' alt='$Package_Title'>
    </div>
    <div class='col-md-6'>
      <img src='./admin_area/P_images/$Package_Image3' class='card-img' alt='$Package_Title'>
    </div>
      <p><h1 class='text-dark'>Package information:-</p>
  </div>
</div>";
}
}
}
?>