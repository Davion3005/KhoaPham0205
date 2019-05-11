<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<?php

print_r($_GET);

?>
<body>
    <form method="GET">
        <div>
            Name: <input type="text" placeholder="Enter your name" name="txtName">
        </div>
        <div>
            Password: <input type="password" placeholder="Enter password" name="txtPassword">
        </div>
        <div>
            Select
            <select>
                <option>HTML</option>
                <option>CSS</option>
                <option>PHP</option>
                <option>Laravel</option>
            </select>
        </div>
        <div>
            <label>
                <input type="radio" name="gender"> Male
            </label>
            <br>

            <input type="radio" name="gender" id="female"> 
            <label for="female">Female</label>

            <br>
            <input type="radio" name="gender"> Other
        </div>
        <div>
            <!-- style="resize:unset" -->
            <!-- 
                    this is comments
             -->
            <textarea cols="30" rows="5"></textarea>
        </div>
        <div>
            Choose file: <input type="file">
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>