<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .person {
            flex-basis: calc(50% - 20px);
            margin-bottom: 40px;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .person:nth-child(even) {
            align-self: flex-end;
        }

        .person:nth-child(odd) {
            align-self: flex-start;
        }

        .person img {
            max-width: 150px;
            height: auto;
            margin-bottom: 10px;
        }

        .center-image {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            filter: blur(5px)
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
            <div class="container-fluid">
                <img src="./Image/logo1.jpg" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
    </div>
    <div class="container">
        <div class="person">
            <img src="./image/kavish.jpg" alt="kavish" class="image1">
            <h2 class="text-dark">Kavish Jain</h2>
            <p><b>I am the Project head of the RR Tours and Travel. <br> The main Idea and the creation of the Project is
                done by me . </b></p>
        </div>
        <div class="person">
            <img src="" alt="">
            <h2 class="text-dark">Vicky</h2>
            <p><b></b></p>
        </div>
        <div class="person">
            <img src="" alt="">
            <h2 class="text-dark">Akash Pandey</h2>
            <p><b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Suspendisse ac
                nisi nisl.</b></p>
        </div>
        <div class="person">
            <img src="" alt="">
            <h2 class="text-dark">Divyang</h2>
            <p><b>Proin vitae fringilla ipsum, ut pharetra velit. Vivamus auctor velit nec enim gravida, a
                condimentum urna
                fermentum.</b></p>
        </div>
    </div>
    <div>
        <!-- footer -->
        <footer class="text-dark p-0" style="background-color:#CDE4F3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="index.php" class="text-dark">Home</a></li>
                            <li><a href="display_all.php" class="text-dark">Pacakage</a></li>
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
    </div>
    <!-- Centered Image -->
    <img src="./image/logo1.jpg" alt="logo1" class="center-image">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>