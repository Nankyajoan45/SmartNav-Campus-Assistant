<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "smartnav campus assistant";
$connezction = mysqli_connect($servername, $username, $password, $database);

if($connection){
    echo "Connection successful";
}else{
    echo "Connection failed";
}
?>