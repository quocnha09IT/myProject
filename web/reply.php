 <?php  
session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
$id_cmt = $_POST['id_cmt'];
$rep = $_POST['rep'];
$id_repper = $_POST['id_repper'];
}
   $connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

$sql=" INSERT INTO reply(id_comment,rep,id_reper)VALUES('$id_cmt','$rep','$id_repper')";
$ketqua=mysqli_query($connect,$sql); 

?>