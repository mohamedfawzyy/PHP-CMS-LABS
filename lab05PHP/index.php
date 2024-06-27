<?php
session_start();
$cookieValue="<span style='background-color:green;padding=5px;color:white'>Amr Diab</span>";

if(!($_COOKIE)){
    setcookie('singer',$cookieValue , time()+5, '/'); //cookie expired after 5seconds
}else{
    if(isset ($_COOKIE["singer"])){
        $cookieValue=  "<span style='background-color:green;padding=5px;color:white'>Amr Diab</span>";  
    }else{
        setcookie('singer',$cookieValue , time()-5, '/'); //cookie expired after 5seconds
        $cookieValue ="<span style='background-color:red;padding=5px;color:white'>No Singer</span>";
        $updateValue="<span style='background-color:green;padding=5px;color:white'>Amr Diab</span>";
        setcookie('singer', $updateValue , time()+5, '/');
    }
   
}

if(!($_SESSION )){
    $sessionCounter=1;
    $_SESSION["counter"]=$sessionCounter;
    
}else{
    $sessionCounter=  $_SESSION["counter"];
    $sessionCounter++;
    $_SESSION["counter"]= $sessionCounter;
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
    <h1>SESSION VS COOKIES</h1>
    <div class="container">
     <div class="box session">
        <h2>Seesion Counter</h2>
        <h4>Expired after close your browser</h4>
        <p>you visited this page: <?= $sessionCounter;?> Times </p>
     </div>
     <div class="box cookies">
        <h2>Singer Name </h2>
        <h4>Expired after 5 seconds</h4>
        <p>Singer Name: <?= $cookieValue;?>  </p>
     </div>    
    </div>
</body>
</html>