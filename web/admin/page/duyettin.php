<?php 
session_start();
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "chatapp");
$sql = "UPDATE `dangtin` SET `show` = '1' WHERE `dangtin`.`id` = {$id}";

$conn->query($sql);
header("location:../?page=2");
?>