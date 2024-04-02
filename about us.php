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
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="person">
            <img src="person1.jpg" alt="Person 1">
            <h2>John Doe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget arcu vel libero viverra vestibulum.</p>
        </div>
        <div class="person">
            <img src="person2.jpg" alt="Person 2">
            <h2>Jane Smith</h2>
            <p>Integer sit amet ligula vitae mi suscipit maximus. Etiam nec mauris nunc.</p>
        </div>
        <div class="person">
            <img src="person3.jpg" alt="Person 3">
            <h2>Michael Johnson</h2>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse ac
                nisi nisl.</p>
        </div>
        <div class="person">
            <img src="person4.jpg" alt="Person 4">
            <h2>Sarah Wilson</h2>
            <p>Proin vitae fringilla ipsum, ut pharetra velit. Vivamus auctor velit nec enim gravida, a condimentum urna
                fermentum.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>