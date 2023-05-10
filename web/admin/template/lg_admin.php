
<?php
  
    session_start();
    ?>
<?php 
   
   $conn = mysqli_connect("localhost","root","","chatapp");
        $email = ($_POST['email']);
        $password = ($_POST['password']);
     
   $sql = "SELECT * FROM users WHERE email='$email'
                     AND password='$password'";
   $ketqua = mysqli_query($conn,$sql);
   $row =mysqli_fetch_array($ketqua);
 
    $_SESSION["email"] =$email;    
    $_SESSION["col"]=$row["col"];

if($row['col'] == 1){ 
        header('location:../index.php');
           
    }
    else if($row['col'] == 0){
        header('location:loginadmin.php');
    }
     ?>