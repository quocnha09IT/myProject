<?php 
session_start();
$id = $_SESSION["id"];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
     
      $hoten = $_POST['hoten'];
      $khuvuc = $_POST['khuvuc'];
       $diachi = $_POST['diachi'];
        $hinhanh = $_POST['hinhanh'];
         $email = $_POST['email'];
         $tieude = $_POST['tieude'];
          $kieuchothue = $_POST["kieuchothue"];
          $dientich = $_POST["dientich"];
          $gia = $_POST["gia"];
          $chitiet = $_POST["chitiet"];
          $create_datetime = $_POST["create_datetime"];
          $dienthoai = $_POST["dienthoai"];
        
          
          
          

        $conn  = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "UPDATE  dangtin SET hoten ='$hoten', khuvuc = '$khuvuc', diachi = '$diachi', hinhanh ='$hinhanh', email = '$email', tieude = '$tieude' , kieuchothue = '$kieuchothue' , dientich = '$dientich' , gia = '$gia', chitiet = '$chitiet', create_datetime = '$create_datetime', dienthoai = '$dienthoai' where id = $id";
 
        $ketqua = mysqli_query($conn,$sql);
      
        header("location:../?page=2 ");
           
    } 
     ?>