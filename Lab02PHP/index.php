<?php
$newLine= "Lab02 \n PHP";
 $str="we love php";
 $fun1=explode(" ", $str);
 $marksArr=[12,45,10,25];  
 $assArr=array("Sara"=>31 ,"John"=>41,"Walaa"=>39,"Ramy"=>40);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab02</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>
            <?php echo nl2br($newLine); ?>
    </h1>
    <div class="task task02">
        <h2>Task2</h2>
        <h3>input string : <span> <?php echo $str; ?> </span></h3>
        <ul>
            <li style="color:orange ;">explode() output : <?php print_r($fun1);?> </li>
            <li style="color:blueviolet;">strtoupper()  output : <?php echo strtoupper($str); ?> </li>
            <li style="color:#09c;">strlen()  output : <?php echo strlen($str); ?> </li>
        </ul>
    </div>

    <div class="task task03">
        <h2>Task03</h2>
        <div>
            <?php
                foreach ($_SERVER as $key => $value) {
                  print_r("<p>$key => $value</p>");
                }
                
            ?>
        </div>

    </div>
   
    <div class="task task04">
        <h2>Tak04</h2>
        <div>
                <ul>
                    <li>array : <?php
                      print_r($marksArr)
                    ?></li>

                    <li>
                        sum of array : 
                        <?php 
                        echo array_sum($marksArr);
                        ?>
                    </li>

                    <li>
                        Avg of array : 
                        <?php 
                        echo array_sum($marksArr) / count($marksArr);
                        ?>
                    </li>

                    <li>
                        Sorted descending of array : 
                        <?php 
                        rsort($marksArr);
                         print_r($marksArr);
                        ?>
                    </li>
                </ul>
        </div>        

    </div>

    <div class="task task05">
        <h2>Task 05</h2>
        <div>
            <ul>
                <li>
                    sorted ascending by value : 
                    <?php 
                    asort($assArr);
                    print_r($assArr);
                    ?>
                </li>
                <li>
                    sorted ascending by key : 
                    <?php 
                    ksort($assArr);
                    print_r($assArr);
                    ?>
                </li>

                <li>
                    sorted descending by value : 
                    <?php 
                    arsort($assArr);
                    print_r($assArr);
                    ?>
                </li>
                <li>
                    sorted descending by key : 
                    <?php 
                    krsort($assArr);
                    print_r($assArr);
                    ?>
                </li>
            </ul>
        </div>
    </div>

</body>
</html>