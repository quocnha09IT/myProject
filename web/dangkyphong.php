
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
<?php 
$key = $_GET['item'];
$conn = mysqli_connect("localhost","root","","chatapp");
   $sql1 = "UPDATE detail_motel SET empty_room = empty_room - 1 WHERE id_motel = $key";
   $ketqua1 = mysqli_query($conn,$sql1);


?>
</body>
</html>