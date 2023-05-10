<?php 
session_start();
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "chatapp");
$sql = "UPDATE `registration_room` SET `show` = '1' WHERE `registration_room`.`id` = {$id}";
$conn->query($sql);
header("location:../?page=5");
?>
