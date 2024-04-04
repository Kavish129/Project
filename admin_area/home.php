<?php
include ('../include/connect.php');
session_start();
if (!isset($_SESSION['admin_name'])) {
    # code...
    header("Location: ./admin_login.php");
    exit;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap Css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }

        .body {
            overflow-x: hidden;
        }

        .Packages_Images {
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

        .edit_image {
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
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../image/logo1.png" alt="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php?View_Packages">View Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="insert_package.php">Insert Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php?list_user">List Users</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    </nav>
    <!-- Second Child -->
    <div class="bg-light">
        <h3 class="text-center p-1">
            <h1 class="text-center">Manage Details</h1>
        </h3>
    </div>
    <!-- Third Child -->
    </div>

    <!-- Fourth Child -->
    <?php
        // Check if no action is requested
        if (!isset($_GET['View_Packages']) && !isset($_GET['edit_package']) && !isset($_GET['delete_package']) && !isset($_GET['list_user'])) {
            // Include View_Packages.php by default
            include('View_Packages.php');
        } else {
            // Include requested action if set
            if (isset($_GET['View_Packages'])) {
                include('View_Packages.php');
            }
            if (isset($_GET['edit_package'])) {
                include('edit_package.php');
            }
            if (isset($_GET['delete_package'])) {
                include('delete_package.php');
            }
            if (isset($_GET['list_user'])) {
                include('list_user.php');
            }
        }
        ?>
    <!-- Bootstrap js Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>