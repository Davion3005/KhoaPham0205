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
    <form>
        So a: <input type="text" placeholder="Enter a" name="a">
            <select name="subject">
                <option value="html">+</option>
                <option value="css">-</option>
                <option value="php">*</option>
            </select>
            So b: <input type="text" placeholder="Enter b" name="b">
        = 
        <input type="text" placeholder="KQ">
        <hr>
        <div>
            Name: <input type="text" placeholder="Enter your name" name="txtName">
        </div>
        <div>
            Name: <input type="text" placeholder="Enter your name" name="txtName">
        </div>
        <div>
            Password: <input type="password" placeholder="Enter password" name="txtPassword">
        </div>
        <div>
            Select
            <select name="subject">
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="php">PHP</option>
                <option value="laravel">Laravel</option>
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