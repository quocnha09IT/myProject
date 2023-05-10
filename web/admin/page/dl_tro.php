<?php
    $id_motel = $_GET['id_motel'];
    $conn = mysqli_connect("localhost", "root", "", "chatapp");
    $sql = "DELETE FROM detail_motel WHERE id_motel='{$id_motel}'";
    $ketqua = mysqli_query($conn,$sql);
    header("location:../?page=0");
   
  ?>
