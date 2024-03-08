<?php
include('./include/connect.php');

//getting pacakages
function getpackages(){
    global $con;
    $select_query="Select * from `package`order by rand()";
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
        <a href='#' class='btn btn-secondary'>Package Info</a>
      </div>
    </div>
  </div>";
  }
}
?>