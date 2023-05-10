
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	.imgg{
		width: 100px;
		height: 100px;
	}
</style>
<body >
   
 <div style="width: 100%">
  <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-24">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Quản lí tin tức</h4>
                    </div>
                    <div class="card-body">
                      <form action="" method="POST">
        <button type="submit" name="news"  style="background: pink;" class="btn">Tin mới đăng</button> <br>  
        </form>       
        <?php 
   if (isset($_POST['news'])) {
    ?>
     <table class="table table-bordered">
                            <thead>
                                <tr>
<th scope="col" class="address" style="background: yellow">họ tên</th>
      <th scope="col" class="paradigm" style="background: yellow">Khu vực</th>
      <th scope="col" class='img' style="background: yellow">Địa chỉ</th>
      <th scope="col"  class="price" style="background: yellow">Email</th>
      <th scope="col" class="S"  style="background: yellow">Tiêu đề</th>
      <th scope="col" class="empty_room"  style="background: yellow">Kiểu cho thuê</th>
      <th scope="col" class="conven" style="background: yellow">Diện tích </th>
      <th scope="col" class="id_motel" style="background: yellow">Giá</th>
      <th scope="col" class="khuvuc" style="background: yellow">Hình ảnh</th>
      <th scope="col" class="khuvuc" style="background: yellow">Chi tiết </th>
      <th scope="col" class="khuvuc" style="background: yellow">Ngày đăng</th>
      <th scope="col" class="khuvuc" style="background: yellow">Điện thoại</th>
      
      <th scope="col" style="background: yellow">Thao tác</th>
    <?php
       $con = mysqli_connect("localhost","root","","chatapp");
       $query = "SELECT * FROM dangtin ";
       $query_run = mysqli_query($con, $query);
       if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    { 
                                      $show = $row['show'];
                                      if($show == NULL){
                                        echo '<tr>';
                                      
        echo '<th class="hoten" >'.$row['hoten'].'</th>';
        echo '<th class="address">'.$row['khuvuc'].'</th>';
        echo '<th class="paradigm" >'.$row['diachi'].'</th>';
      
        echo '<th class="price" >'.$row['email'].'</th>';
        echo '<th class="S" >'.$row['tieude'].'</th>';
        echo '<th class="empty_room" >'.$row['kieuchothue'].'</th>';
        echo '<th class="conven" >'.$row['dientich'].'</th>';
        echo '<th class="id_motel" >'.$row['gia'].'</th>';
          echo "<th class='img' ><img class='imgg' src='../img/$row[hinhanh]'</th>";
        echo '<th class="khuvuc">'.$row['chitiet'].'</th>';  
        echo '<th class="khuvuc">'.$row['create_datetime'].'</th>';   
        echo '<th class="khuvuc">'.$row['dienthoai'].'</th>';   
            
        echo '<td><a href="page/duyettin.php?id='.$row['id'].'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Duyệt</a></td>';
        echo '</tr>';
                                      }elseif($show !=1) {
                                        echo "Không có tin nào!!!";
                                      }
                                    }
                                }
                                ?>
 </tbody>
                        </table>  
                                <?php
                       }
        ?>  

                     
<form action="" method="POST"> 
  <div class="row">
          <div class="col-md-6">
            <input type="text" name="search" class='form-control' placeholder="Search By Name" value="" > 
          </div>
          <div class="col-md-6 text-left">
            <button type="submit" name="search1" class="btn" style="background: gray;color: black">Search</button>
          </div>
          </div>
        </form> <br>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   
      <th scope="col" class="address" style="background: yellow">họ tên</th>
      <th scope="col" class="paradigm" style="background: yellow">Khu vực</th>
      <th scope="col" class='img' style="background: yellow">Địa chỉ</th>
      <th scope="col"  class="price" style="background: yellow">Email</th>
      <th scope="col" class="S"  style="background: yellow">Tiêu đề</th>
      <th scope="col" class="empty_room"  style="background: yellow">Kiểu cho thuê</th>
      <th scope="col" class="conven" style="background: yellow">Diện tích </th>
      <th scope="col" class="id_motel" style="background: yellow">Giá</th>
      <th scope="col" class="khuvuc" style="background: yellow">Hình ảnh</th>
      <th scope="col" class="khuvuc" style="background: yellow">Chi tiết </th>
      <th scope="col" class="khuvuc" style="background: yellow">Ngày đăng</th>
      <th scope="col" class="khuvuc" style="background: yellow">Điện thoại</th>
      
      <th scope="col" style="background: yellow">Thao tác</th> 
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","chatapp");
                                
                              
                               
if(isset($_POST['search1'])){
                                  $searchkey = $_POST['search'];
                                  $con = mysqli_connect("localhost","root","","chatapp");
                                
                                 $query = "SELECT * FROM dangtin WHERE khuvuc LIKE '%$searchkey%'";
                               
                                
                                }else {
                                  $query = "SELECT * FROM dangtin ";
                                }
                                
                                
                              
                                $query_run = mysqli_query($con, $query);
                               

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    { 
                                      $show = $row['show'];
                                      if($show == 1){
                                        echo '<tr>';
                                      
        echo '<th class="hoten" >'.$row['hoten'].'</th>';
        echo '<th class="address">'.$row['khuvuc'].'</th>';
        echo '<th class="paradigm" >'.$row['diachi'].'</th>';
      
        echo '<th class="price" >'.$row['email'].'</th>';
        echo '<th class="S" >'.$row['tieude'].'</th>';
        echo '<th class="empty_room" >'.$row['kieuchothue'].'</th>';
        echo '<th class="conven" >'.$row['dientich'].'</th>';
        echo '<th class="id_motel" >'.$row['gia'].'</th>';
          echo "<th class='img' ><img class='imgg' src='../img/$row[hinhanh]'</th>";
        echo '<th class="khuvuc">'.$row['chitiet'].'</th>';  
        echo '<th class="khuvuc">'.$row['create_datetime'].'</th>';   
        echo '<th class="khuvuc">'.$row['dienthoai'].'</th>';   
            
        echo '<td><a href="page/dl_tin.php?id='.$row['id'].'">xoa</a>||<a href="page/edit_tin.php?id='.$row['id'].'">sửa</a></td>';
        echo '</tr>';
      }
                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="3">No Record Found</td>
                                    </tr>
                                    <?php
                                }
                            ?>
                            </tbody>
                        </table>
      


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
