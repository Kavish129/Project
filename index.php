<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours and Travel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
            <div class="container-fluid">
                <img src="./Image/logo1.jpg" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="display_all.php">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="C:\xampp\htdocs\Project\enquiry.php">Enquiry</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="search_package.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="search" class="btn btn-outline-dark" name="search_data_package">
                    </form>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#E5E7E9">  
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="text-dark nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="text-dark nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>

        <div class="py-2" style="background-color:#e3f2fd   ">
            <h3 class="text-center">Welcome to R.R. Tours and Travel</h3>
        </div>

        <div class="row px-4">
            <?php
            include('./include/connect.php');
            include('function/common_function.php');
            getpackages();
            ?>
        </div>
        <!-- footer --> 
        <footer class="text-dark p-0" style="background-color:#CDE4F3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="index.php"class="text-dark">Home</a></li>
                            <li><a href="display_all.php" class="text-dark">Pacakage</a></li>
                            <li><a href="#" class="text-dark">About Us</a></li>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
