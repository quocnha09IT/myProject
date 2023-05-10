<?php
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "chatapp");
    $sql = "DELETE FROM dangtin WHERE id='{$id}'";
    $ketqua = mysqli_query($conn,$sql);
    header("location:../?page=2");
   
  ?>
