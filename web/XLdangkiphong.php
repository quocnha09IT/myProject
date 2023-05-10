
<?php 
session_start();
?>	
<?php 
$tenn = $_SESSION['username'];
$conn = mysqli_connect("localhost","root","","banhang");
$sql ="INSERT INTO dangkyphong(idphong ,ten,email,diachi) VALUES(0,'$tenn','quocnha12@gmail.com','quang nam')";
$ketqua = mysqli_query($conn,$sql);


foreach($_SESSION['chitietdonhang'] as $key => $value){
   $sql1 = "INSERT INTO chitietdonhang(idmathang, soluong)VALUES( $key, $value)";
   $ketqua1 = mysqli_query($conn,$sql1);

   $sql2 = "UPDATE hanghoa SET soluong = soluong - $value WHERE id = $key";
   $ketqua2 = mysqli_query($conn,$sql2);
}
include 'delcart.php';
?>