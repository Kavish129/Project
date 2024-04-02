<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap Css Link --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font awesome --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css file --> 
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image{
            width: 100px;
            object-fit: contain;
        }
        .Packages_Images{
            width: 100px;
            object-fit: auto;
        }
        .table {
            border-collapse: collapse;
            width: 100%;
        }
        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .table th {
            background-color: #e3f2fd;
        }
        .table tbody tr:nth-child(even) {
            background-color: #EBF6FC;
        }
        .edit_image{
            width: 150px;
            object-fit: auto;
        }
    </style>
</head>
<body>
    <!-- First Child --> 
    <!-- navbar --> 
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
            <div class="container-fluid ">
                <img src="../image/logo1.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
                    <ul class="navbar-nav">
                        <li class="text-dark nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- Second Child --> 
        <div class="bg-light">
            <h3 class="text-center p-1"><h1 class="text-center">Manage Details</h1></h3> 
        </div>
        <!-- Third Child --> 
        <div class="row">
            <div class="col-md-12 p-1 d-flex align-items-center bg-info">
                <div class="px-5">
                    <a href="#"><img src="../image/logo1.jpg" alt="" class="admin_image"></a>
                    <p class="text-dark text-center">Admin name</p> 
                </div>
                <!-- button*5>a.nav-link.text-light.bg-info.my-1 --> 
                <div class="button text-center">
                    <button class="my-3"><a href="insert_package.php" class="nav-link text-center text-dark my-1">Insert Packages</a></button>
                    <button ><a href="home.php?View_Packages" class="nav-link text-center text-dark my-1">View Packages</a></button>
                    <button ><a href="home.php?list_user" class="nav-link text-center text-dark my-1">List Users</a></button>
                    <button ><a href="" class="nav-link text-center text-dark my-1">Logout</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth Child -->
    <div class="container my-3">
        <?php
        if(isset($_GET['View_Packages'])){
            include('View_Packages.php');
        }
        if(isset($_GET['edit_package'])){
            include('edit_package.php');
        }
        if(isset($_GET['delete_package'])){
            include('delete_package.php');
        }
        if(isset($_GET['list_user'])){
            include('list_user.php');
        }
        ?>
    </div>
    <!-- last child --> 
    <!-- footer --> 
    <footer class="text-dark p-0" style="background-color:#CDE4F3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-dark">Home</a></li>
                        <li><a href="" class="text-dark">Package</a></li>
                        <li><a href="about us.php" class="text-dark">About Us</a></li>
                        <li><a href="info.php" class="text-dark">Enquiry</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="mailto:jkavish575@gmail.com">jkavish575@gmail.com</a></li>
                        <li><a href="tel:+919510244436">+919510244436</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!-- Bootstrap js Link --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
