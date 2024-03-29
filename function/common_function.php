<?php
include ('./include/connect.php');

//getting pacakages
function getpackages()
{
  global $con;
  $select_query = "Select * from `package`order by rand() limit 0,6";
  $result_query = mysqli_query($con, $select_query);
  // $row=mysqli_fetch_assoc($result_query);
  //echo $row['Package_Title'];
  while ($row = mysqli_fetch_assoc($result_query)) {
    $P_ID = $row['P_ID'];
    $Package_Title = $row['Package_Title'];
    $Package_Description = $row['Package_Description'];
    $Package_Image1 = trim($row['Package_Image2']);
    echo "<div class='col-md-4 mb-2'>
    <div class='card'>
       <img src='./admin_area/P_images/$Package_Image1' class='card-img-top' alt='$Package_Title'>
       <div class='card-body'>
        <h5 class='card-title'>$Package_Title</h5>
        <p class='card-text'>$Package_Description</p>
        <a href='enquiry.php?P_ID=$P_ID' class='btn btn-info'>Enquiry Now</a>
        <a href='PackageInfo.php?P_ID=$P_ID' class='btn btn-secondary'>Package Info</a>
      </div>
    </div>  
  </div>";
  }
}

// searching product function

function search_package()
{
  global $con;
  if (isset($_GET['search_data_package'])) {
    $search_data_value = $_GET['search_data'];
    $search_query = "Select * from `package` where 	Package_Keywords like'%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    // $row=mysqli_fetch_assoc($result_query);
    //echo $row['Package_Title']; 
    while ($row = mysqli_fetch_assoc($result_query)) {
      $P_ID = $row['P_ID'];
      $Package_Title = $row['Package_Title'];
      $Package_Description = $row['Package_Description'];
      $Package_Image1 = trim($row['Package_Image2']);
      echo "<div class='col-md-4 mb-2'>
    <div class='card'>
       <img src='./admin_area/P_images/$Package_Image1' class='card-img-top' alt='$Package_Title'>
       <div class='card-body'>
        <h5 class='card-title'>$Package_Title</h5>
        <p class='card-text'>$Package_Description</p>
        <a href='enquiry.php?P_ID=$P_ID' class='btn btn-info'>Enquiry Now</a>
        <a href='PackageInfo.php?P_ID=$P_ID' class='btn btn-secondary'>Package Info</a>
      </div>
    </div>
  </div>";
    }
  }
}

// Package information

function package_info()
{
  global $con;
  if (isset($_GET['P_ID'])) {
    $package_id = $_GET['P_ID'];
    $select_query = "SELECT * FROM `package` WHERE P_ID=$package_id";
    $result_query = mysqli_query($con, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)) {
      $P_ID = $row['P_ID'];
      $Package_Title = $row['Package_Title'];
      $Package_Description = $row['Package_Description'];
      $Package_Image1 = trim($row['Package_Image2']);
      $Package_Image2 = trim($row['Package_image1']);
      $Package_Image3 = trim($row['Package_Image3']);
      $Package_Information = $row['Package_Information'];
      $Link=$row['Link'];

      echo "<div class='row px-4'>
      <img src='./admin_area/P_images/$Package_Image1' class='d-block w-100' alt='$Package_Title' style='width:100%; border-radius: 3.25rem!important;   padding-top: 25px;     min-height: 400px;
      max-height: 400px;   object-fit: cover'>;
                <p>$Link</p>
                <div class='card-body'>
                <h5 class='card-title'>$Package_Title</h5>
                <p class='card-text'>$Package_Description</p>
                <p class='text-secondary'>$Package_Information</p>

                <a href='enquiry.php?P_ID=$P_ID' class='btn btn-info'>Enquiry Now</a>
                <a href='./' class='btn btn-secondary'>Go back</a>
            </div>
            </div>";
    }
  }
}
?>