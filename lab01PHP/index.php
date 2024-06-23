<?php
    define('WEBSITEName','Get My Garde');
    $age=10;
    $msg="";
    switch (true) {
        case $age >= 6 && $age <=12:
            $grade = $age - 6;
            $msg="Go to grade :$grade ";
            break;
        case $age==5 : 
            $msg="Go to Kindergarden";
            break;
        case $age < 5 :
            $msg="Stay at home";
            break;
        default:
            $msg="eroll in ITI";
            break;
    }
    
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1><?php echo (WEBSITEName); ?></h1>
    <div class="main">
        <h4>according to your age <?php echo $age?></h4>
        <p><strong>you should <?php echo $msg?></strong></p>
    </div>
    <div class="contaierInfo">
        <div class="phpinfo">
                <?php
                     phpinfo();
                ?>
        </div>
    </div>
</body>
</html>