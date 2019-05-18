<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<?php
if(isset($_POST['txtSubmit'])){
    
}
?>
<body>
    <div class="row justify-content-center">
        <div class="col-4">
            <h2 class="text-center">Login</h2>
            <form method="post">
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="text" name="txtEmail" placeholder="Enter email" class="form-control">
                </div>
            </form>
        </div>
    </div>
</body>
</html>