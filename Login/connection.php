<?php

$dbhost = "localhost";
$dbuser = "benchgro_login";
$dbpass = "DkcPz2f8H9NyM6P";
$dbname = "benchgro_main";



$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{

	echo "failed to connect!";
}
