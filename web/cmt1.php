 <?php  
session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
$comment = $_POST['comment'];
$name = $_POST['name'];
$unique_id = $_POST['unique_id'];
$id_motel = $_POST['id_motel'];
$rating =$_POST['rating'];
}
   $connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

$sql=" INSERT INTO rate(name,comment,unique_id,id_motel,rating)VALUES('$name','$comment','$unique_id','$id_motel','$rating')";
$ketqua=mysqli_query($connect,$sql); 
header("location: portfolio-details.php?item=$id_motel")
?>