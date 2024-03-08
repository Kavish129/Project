<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours and Travel</title>
</head>
<!-- css file --> 
<link rel="stylesheet" href="style.css">
 <!-- bootstrap css link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
     <!-- navbar --> 
     <div class="container-fluid p-0">
        <!-- first child --> 
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./Image/logo1.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pacakges</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Enquiry</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Second child --> 
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">  
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
      <a class="nav-link" href="#">Welcome Guest</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
   </li>
</ul>
</nav>
<!-- Third Child --> 
<div class="bg-light">
  <h3 class="text-center">Welcome to R.R. Tours and Travel</h3>
</div>
<!-- Fourth Child --> 
    <!-- Package --> 
<div class="row px-4">
  <!-- FECTHING THE PACKAGE --> 
  <?php
  include('./include/connect.php');
  include('function/common_function.php');
  getpackages();
?>
  </div>
</div>
      <!-- last child --> 
<div class="bg-info p-3 text-center">
   <p>Welcome To R.R. Tours And Travels</p>
</div>
    <!-- bootstrap js link --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>