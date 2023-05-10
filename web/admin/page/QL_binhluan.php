<!DOCTYPE html>
<html>
<head>
  <title>Quản lí Bình luận</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
<ul class="list-group" style="width: 900px">
  <button type="button" class="list-group-item list-group-item-action active">
   Các bình luận gần đây
  </button>
  <?php
$connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

$sql="SELECT * FROM rate ";
$ketqua=mysqli_query($connect,$sql);
foreach ($ketqua as $row) {

  ?>
  
<li class="list-group-item d-flex justify-content-between align-items-center">
  
  
<p>Bình luận :<?=$row['comment'];?> </p>
<p> ID nhà trọ : <?=$row['id_motel'];?></p>
<p> Tên người :<?=$row['name'];?></p>
<a href="?page=4&&id=<?php echo"$row[id]" ?>">đây</a>

<form action="" method="post">
    <select name="select1" >
        <option value="value2">hiển thị</option>
        <option value="value1">ẩn</option>
    </select>
    <input  type="submit" name="submit" value="Go"/>
</form>
<?php
}
?>
</li> 
</ul>
<?php

if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    $id =  $_GET['id'];
   
    switch ($select1) {
        case 'value1':
            $sql = "UPDATE `rate` SET `show` = '1' WHERE `rate`.`id` = {$id}";

            
            $conn->query($sql);
            break;
        case 'value2':
           $sql = "UPDATE `rate` SET `show` = '0' WHERE `rate`.`id` = {$id}";
            
           $conn->query($sql); 
            break;
        default:
           echo "Error updating record: " . $connect->error;
            break;
    }
}
?>
</body>
</html>