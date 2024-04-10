<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours and Travel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
            background-color: #f0f7fa;
        }

        /* Background image with overlay */
        .background-overlay {
            position: relative;
            width: 100%;
            height: 100%;
            /* Adjust height as needed */
        }

        .background-overlay img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Adjust transparency as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Center content vertically */
        }

        .pacifico-regular {
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            font-size: 70px;
            color: #fff;
            /* Text color */
            text-align: center;
            margin-bottom: 20px; /* Added some space below the text */
        }
    </style>
</head>

<body >
    <div class="container-fluid p-0">
        <!-- Navbar -->
        <div class="background-overlay">
            <img src="Image\backgroug image.jpeg" alt="">
            <div class="overlay">
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: transparent;  position: absolute; top: 30px;">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">
                            <img src="./Image/logo1.png" alt="Logo" class="logo" style="height: 170px !important;">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>"
                                        href="index.php">Home</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about us.php') ? 'active' : ''; ?>"
                                        href="about us.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'info.php') ? 'active' : ''; ?>"
                                        href="info.php">Enquiry</a>
                                </li>
                            </ul>
                           <!-- <form class="d-flex m-5" action="search_package.php" method="get">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="search_data" style="background-color: transparent;">
                                <button class="btn btn-outline-light" type="submit" name="search_data_package">Search</button>
                            </form> -->
                            <?php if (isset($_SESSION['username'])) : ?>
                                <a class="btn btn-outline-light" href="user_area/user_logout.php">Logout</a>
                            <?php else : ?>
                                <a class="btn btn-outline-light" href="./user_area/user_login.php">Login</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
                <h3 class="pacifico-regular">Welcome to R.R. Tours and Travel</h3>
            </div>
        </div>
        <!-- End Navbar -->

        <!-- Content -->
        <div class="row px-4 mt-5">
            <?php
            include ('./include/connect.php');
            include ('function/common_function.php');
            getpackages();
            ?>
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <footer class="text-dark p-3 mt-4 " style="background-color:#CDE4F3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="index.php" class="text-dark">Home</a></li>
                            <li><a href="about us.php" class="text-dark">About Us</a></li>
                            <li><a href="info.php" class="text-dark">Enquiry</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="mailto:rrtravel272@gmail.com">rrtravel272@gmail.com</a></li>
                            <li><a href="tel:+919510244436">+919510244436</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
