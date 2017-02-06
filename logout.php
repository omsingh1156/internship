<?php
session_start();

$conn=new MySQLi("localhost","root","","tech_mahindra");
$email=$_SESSION['email'];

session_destroy();

header("Location:index.php");
?>
<