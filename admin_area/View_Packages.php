<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Packages</title>
    <style>
        .body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <h3 class="text-center text-success">All Packages</h3>
    <table class="table table-bordered-mt-3">
        <thead style="background-color: #e3f2fd">
            <tr>
                <th>Package ID</th>
                <th>Package Title</th>
                <th>Package Image</th>
                <th>Edit</th>
                <th>Delete</th>
               <!-- <th>Link</th> -->
            </tr>
        </thead>
        <tbody style="background-color:#EBF6FC text-dark">
        <?php
        $get_packages="Select * from `package`";
        $result=mysqli_query($con,$get_packages);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $Package_ID=$row['P_ID'];
            $package_Title=$row['Package_Title'];
            $package_image1=trim($row['Package_image1']);
           /* $Link=$row['Link'];*/
            $number++;
            ?>
            <tr class='text-center text-dark'>
            <td><?php echo $number ; ?></td>
            <td><?php echo $package_Title ; ?></td>
            <td><img src='./P_images/<?php echo $package_image1 ; ?>' class='Packages_Images'></td>
            <td><a href='home.php?edit_package=<?php echo $Package_ID;?>'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='home.php?delete_package=<?php echo $Package_ID;?>'><i class='fa-solid fa-trash'></i></a></td>
           <!-- <td><a href='<?php echo $Link ;?>'></a></td> -->
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>