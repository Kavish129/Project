<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New user registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- Username Field --> 
                    <div class="form-outline mb-3">
                        <label for="User_Username" class="form-label">Username</label>
                        <input type="text" id="User_Username" class="form-control" placeholder="Enter your username" 
                        autocomplete="off" required="required" name="User_Username"/>
                    </div>
                    <!-- Email Field -->
                    <div class="form-outline mb-3">
                        <label for="User_Email" class="form-label">User Email</label>
                        <input type="text" id="User_Email" class="form-control" placeholder="Enter your user email" 
                        autocomplete="off" required="required" name="User_Email"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>