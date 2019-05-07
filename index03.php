<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ban co vua</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="banco">
        <?php
            for($y=1; $y<=8; $y++){
                for($x = 1; $x<=8; $x++){
                    if(($y+$x)%2==0){
                        echo '<div class="oco trang"></div>';
                    }
                    else{
                        echo '<div class="oco den"></div>';
                    }
                }
            }
        ?>
    </div>
</body>
</html>