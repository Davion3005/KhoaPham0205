<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-sm-4 col-md-6 col-lg-6 col-6">
            <h2 class="text-center">Login</h2>
            <?php
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
            <form method="post" action="xulylogin.php">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="txtEmail" placeholder="Enter email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pasword</label>
                    <input type="password" name="txtPassword" placeholder="Enter password" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>