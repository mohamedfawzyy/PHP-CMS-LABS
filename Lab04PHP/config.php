<?php
    $hostName="localhost";
    $userName="root";
    $password="";
    $dbname="UsersDB";
    $conn=new mysqli($hostName,$userName,$password);
    //check connection
    if(!$conn){
        die("connection to your Database Failed".mysqli_connect_error());
    }
    //create database if not exists
    $sql="create database if not exists UsersDB";
    $result=mysqli_query($conn, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'>Something error with your DB</div>";
    }
    //select database
    mysqli_select_db($conn, $dbname);
    //create main and only table
    $sql = "CREATE TABLE if not exists users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        gender VARCHAR(1)Not NULL,
        MailStatus varchar(10) Not NULL
        )";
    $result=mysqli_query($conn, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'>Something error with your Data Base</div>";
    }
    
    //seeding data
    
    // $sql = "INSERT INTO users (name , email , gender , MailStatus) VALUES ('Mohamed', 'mo@gmail.com', 'M' ,'yes')";
    // $result=mysqli_query($conn, $sql);
    // if(!$result){
    //     echo "<div class='alert alert-danger'>Something error when seeding data your data in  Data Base</div>";
    // }
       
?>