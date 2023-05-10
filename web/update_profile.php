<?php 
session_start();
 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      
     $unique_id= $_POST["unique_id"];
      $birth_day = $_POST['birth_day'];
      $address = $_POST['address'];
       $email = $_POST['email'];
        $ID_card = $_POST['ID_card'];
         $phone_number = $_POST['phone_number'];
         $sex = $_POST['sex'];
          
          
          

        $conn  = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "UPDATE  profile_user SET birth_day ='$birth_day', address = '$address', email = '$email', ID_card ='$ID_card', phone_number = '$phone_number', sex = '$sex'  where unique_id = $unique_id";
     
        $ketqua = mysqli_query($conn,$sql);
       
        header("location: myprofile.php?unique_id=$unique_id"); 
      
       
           
    } 
     ?>