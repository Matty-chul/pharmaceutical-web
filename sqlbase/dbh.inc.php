<?php

//credentials
$dbhost = "localhost";
$dbname = "pharmademo";
$dbusername="root";
$dbpassword="";

$exceptionport ="3310"; //connection to be attempted on exception port in case default (3306) is not set on MySQL module
 
 
try{
    $dsn = "mysql:host=".$dbhost.";dbname=".$dbname;
    $pdo = new PDO($dsn , $dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "Connection Successful."; //Status Message
   
 
}catch(PDOException $e){
    try{
        $dsn = "mysql:host=".$dbhost.":".$exceptionport.";dbname=".$dbname;
        $pdo = new PDO($dsn , $dbusername,$dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "Connection Successful on exception port: ".$exceptionport; //Status Message
    }catch(PDOException $err){
        echo "Connection failed on exception port! " . $e->getMessage();
    }
    
 
}