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
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="#">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="#">Enquiry</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button> <!-- Changed to light button -->
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

        <div class="bg-light py-2" >
            <h3 class="text-center">Welcome to R.R. Tours and Travel</h3>
        </div>

        <div class="row px-4">
            <?php
            include('./include/connect.php');
            include('function/common_function.php');
            getpackages();
            ?>
        </div>

        <div class="bg-success  p-1 text-center mt-4">
            <p><h3 class="text-dark">Welcome To R.R. Tours And Travels</h3></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
