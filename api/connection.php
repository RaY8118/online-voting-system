<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "demo";
 $connect = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
?>