<?php
    $user_id = $_GET['user_id'];
    $conn = mysqli_connect("localhost", "root", "", "chatapp");
    $sql = "DELETE FROM users WHERE user_id='{$user_id}'";
    $ketqua = mysqli_query($conn,$sql);
    header("location:../?page=1");
   
  ?>
