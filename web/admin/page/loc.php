<?php

   $connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");
$sort_option ="";
if(isset($_GET['sort_numeric']))
{
  if($_GET['sort_numeric'] == "low-high")
  {
    $sort_option ="ASC";
  }
  }elseif ($_GET['sort_numeric'] == "high_low")
   {
    $sort_option = "DESC";
  }

$sql = "SELECT * FROM detail_motel ORDER BY price $sort_option";
$ketqua = mysqli_query($connect,$sql);
if(mysqli_num_rows($ketqua) > 0){
 foreach ($ketqua as $row) {
    echo '<tr>';
        echo '<th class="name" >'.$row['name'].'</th>';
        echo '<th class="address">'.$row['address'].'</th>';
        echo '<th class="paradigm" >'.$row['paradigm'].'</th>';
        echo "<th class='img' ><img class='imgg' src='../img/$row[img]'</th>";
        echo '<th class="price" >'.$row['price'].'</th>';
        echo '<th class="S" >'.$row['S'].'</th>';
        echo '<th class="empty_room" >'.$row['empty_room'].'</th>';
        echo '<th class="conven" >'.$row['conven'].'</th>';
        echo '<th class="id_motel" >'.$row['id_motel'].'</th>';
        echo '<th class="khuvuc">'.$row['khuvuc'].'</th>';     
        echo '<td><a href="page/dl_tro.php?id_motel='.$row['id_motel'].'">xoa</a></td>';
        echo '<td><a href="page/edit_tro.php?id_motel='.$row['id_motel'].'">sửa</a></td>';
        echo '</tr>';
 
}}
header("location :index.php?page=3") 
?>