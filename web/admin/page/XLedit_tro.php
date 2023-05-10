<?php 
session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
     
      $name = $_POST['name'];
      $address = $_POST['address'];
       $paradigm = $_POST['paradigm'];
        $img = $_POST['img'];
         $price = $_POST['price'];
         $S = $_POST['S'];
          $empty_room = $_POST["empty_room"];
          $conven = $_POST["conven"];
          $id_motel = $_POST["id_motel"];
          $khuvuc = $_POST["khuvuc"];
          
          
          

        $conn  = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "UPDATE  detail_motel SET name ='$name', address = '$address', paradigm = '$paradigm', img ='$img', price = '$price', S = '$S' , empty_room = '$empty_room' , conven = '$conven' , id_motel = '$id_motel', khuvuc = '$khuvuc' where id_motel= $id_motel";
     
        $ketqua = mysqli_query($conn,$sql);
      
        header("location:../?page=3");
           
    } 
     ?>