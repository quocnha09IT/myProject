 <?php  
session_start();
$id = $_SESSION['unique_id'];
$question = $_POST['question'];
   $connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

$sql=" INSERT INTO question(id_per,question)VALUES('$id','$question')";
$ketqua=mysqli_query($connect,$sql); 
header("location: hommee.php")
?>