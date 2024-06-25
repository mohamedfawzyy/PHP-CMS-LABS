<?php
include "./students.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <table class="table table-striped">
        <thead>
            <?php
                foreach ($students[0] as $key => $value) {
                 echo "<th>$key</th>";
                }
            ?>
        </thead>

        <tbody>
            <?php 
            foreach ($students as $index => $user) {
                if($user['track'] == "CMS"){
                    $color="red";
                }else{
                    $color="black";
                }
                echo "<tr >";
                    foreach ($user as $key => $value) {
                      echo "<td style='color:$color !important'>$value</td>";
                    }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>