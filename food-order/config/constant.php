<?php

//Creating Constant to store values, constants are name in caps while variables in lower case
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');

//$mysqli = new mysqli(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
$con = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(!$con){
    die("Failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection successful";
}
