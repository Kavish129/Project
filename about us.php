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
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            overflowrrtravel272;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px;
        }

        .person {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .person img {
            width: 100%;
            max-width: 250px;
            height: auto;
            margin-bottom: 20px;
            border-radius: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .person h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .person p {
            font-size: 16px;
            color: #555;
            margin-bottom: 0;
        }

        footer {
            background-color: #EFF5F8;
            padding: 1px;
        }

        footer ul {
            list-style: none;
            padding: 3px;
        }

        footer ul li {
            margin-bottom: 10px;
        }

        footer ul li a {
            text-decoration: none;
            color: #333;
        }

        .center-image {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: -1;
            opacity: 0.1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light p-0" style="background-color:#EFF5F8">
        <div class="container">
            <img src="./Image/logo1.png" alt="logo1" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="person">
                    <img src="./image/kavish.jpg" alt="Kavish Jain">
                    <h2>Kavish Jain</h2>
                    <p>I am the Project head of RR Tours and Travel. The main Idea and the creation of the Project is
                        done by me.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="person">
                    <img src="./image/vicky.jpg" alt="Vicky Gawan">
                    <h2>Vicky Gawani</h2>
                    <p>I am the backend helper. My work is to give the data to the Project head and to understand the
                        project.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="person">
                    <img src="" alt="">
                    <h2>Akash Pandey</h2>
                    <p>I am the backend helper. My work is to give the data to the Project head and to understand the
                        project.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="person">
                    <img src="./image/divyang.png" alt="">
                    <h2>Divyang Vaddoriya</h2>
                    <p>I am the backend helper. My work is to give the data to the Project head and to understand the
                        project.</p>
                </div>
            </div>
            <!-- Add more persons as needed -->
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Quick Links</h5>
                    <ul style="  padding-bottom: 0;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="display_all.php">Packages</a></li>
                        <li><a href="about us.php">About Us</a></li>
                        <li><a href="info.php">Enquiry</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><a href="mailto:rrtravel272@gmail.com">rrtravel272@gmail.com</a></li>
                        <li><a href="tel:+919510244436">+919510244436</a></li>
                    </ul>
                </div>
            </div>
        </div>

    <!-- Centered Image -->
    <img src="./image/logo1.jpg" alt="logo1" class="center-image">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>