<?php  
   $connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

$sql="SELECT * FROM users ";
$ketqua=mysqli_query($connect,$sql);
mysqli_num_rows($ketqua);
   ?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
 
.imgrt{width: 150px; height:150px;}
</style>
	<title>nguoi dung</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style type="text/css">
	.imgg{
		width: 100px;
		height: 100px;
	}
</style>
<body>



<table class="table caption-top">
  <caption>danh sách nhà trọ</caption>
  <tdead>
    <tr>
      <td style="background: yellow" scope="col">họ </td>
      <td style="background: yellow" scope="col">tên </td>
      <td style="background: yellow" scope="col">email </td>
      <td style="background: yellow" scope="col">ảnh </td>
      <td style="background: yellow" scope="col">trạng thái</td>
      <td style="background: yellow" scope="col">avata</td>
      <td style="background: yellow" scope="col">xóa người dùng</td>
      
    </tr>
  </tdead>

  <tbody>

    	<?php 
    	while($row=mysqli_fetch_array($ketqua)){
        echo "<tr>";
    		echo '<td scope="col">'.$row['fname'].'</td>';
    		echo '<td scope="col">'.$row['lname'].'</td>';
        echo '<td scope="col">'.$row['email'].'</td>';
        echo '<td scope="col">'.$row['status'].'</td>';
        echo '<td scope="col">'.$row['lname'].'</td>';
        echo "<td scope='col'><img class='imgg' src='../php/images/".$row['img']."'</td>";
        
         echo '<td><a href="page/dl_nguoidung.php?id='.$row['user_id'].'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">xóa</a></td>';

        echo "</tr>";

  }
      ?>
    
  </tbody>
</table>
<!--  -->
</div>
</div>
</form>
</body>
</html>