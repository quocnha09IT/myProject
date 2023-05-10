<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
                                  $searchkey = $_POST['search'];
                                  $con = mysqli_connect("localhost","root","","chatapp");
                                
                                 $query = "SELECT * FROM detail_motel WHERE khuvuc LIKE '%$searchkey%'";
                               
                                 $query_run = mysqli_query($con,$query);
                                }
                                ?>
                                <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="name" style="background: yellow"> Nhà trọ</th> 
      <th scope="col" class="address" style="background: yellow">Địa chỉ</th>
      <th scope="col" class="paradigm" style="background: yellow">paradigm</th>
      <th scope="col" class='img' style="background: yellow">Ảnh</th>
      <th scope="col"  class="price" style="background: yellow">Giá</th>
      <th scope="col" class="S"  style="background: yellow">Diện tích</th>
      <th scope="col" class="empty_room"  style="background: yellow">Phòng trống</th>
      <th scope="col" class="conven" style="background: yellow">Tiện ích </th>
      <th scope="col" class="id_motel" style="background: yellow">ID nhà trọ</th>
      <th scope="col" class="khuvuc" style="background: yellow">Khu vực</th>
      <th scope="col" style="background: yellow">xóa trọ</th>
      <th scope="col" style="background: yellow">sửa trọ</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                      
                                    while($row = mysqli_fetch_array($query_run))
                                    {
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
                                    }
                                
                                ?>
                            </tbody>
                        </table>

