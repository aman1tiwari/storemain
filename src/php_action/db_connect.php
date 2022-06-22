<?php 	

$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname = "sinventoryphp";
// $store_url = "http://localhost/SimpleInventorySystem-PHP/";
// db connection
$connect = new mysqli($servername, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>