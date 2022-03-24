<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "register";


try{

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


    mysqli_set_charset($con, charset:'utf8');
}catch(Exception $ex){
    print "An Exception occured. Message: " . $ex->getMessage();
}catch(Error $ex){
    print"The system is busy, please try again later";
}