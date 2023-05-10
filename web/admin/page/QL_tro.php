
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
            <div class="col-md-20">
                <div class="card mt-5" style="width: 1400px">
                    <div class="card-header">
                        <h4>Quản lí nhà trọ</h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <select name="sort_numeric" class="form-control">
                                            <option value="">--Select Option--</option>
                                            <option value="low-high" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high") { echo "selected"; } ?> > Low - High</option>
                                            <option value="high-low" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "high-low") { echo "selected"; } ?> > High - Low</option>
                                        </select>
                                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
<form action="" method="POST"> 
  <div class="row">
          <div class="col-md-6">
            <input type="text" name="search" class='form-control' placeholder="Search By Name" value="" > 
          </div>
          <div class="col-md-6 text-left">
            <button type="submit"  class="btn btn-primary btn-lg active" role="button">Search</button>
           
          </div>
          </div>
        </form>

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
    
      <th scope="col" style="background: yellow">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","chatapp");
                                
                                $sort_option = "";
                                if(isset($_GET['sort_numeric']))
                                {
                                    if($_GET['sort_numeric'] == "low-high"){
                                        $sort_option = "ASC";
                                    }elseif($_GET['sort_numeric'] == "high-low"){
                                        $sort_option = "DESC";
                                    }
                                }
                               
if($_SERVER["REQUEST_METHOD"]=="POST"){
                                  $searchkey = $_POST['search'];
                                  $con = mysqli_connect("localhost","root","","chatapp");
                                
                                 $query = "SELECT * FROM detail_motel WHERE khuvuc LIKE '%$searchkey%'";
                               
                                
                                }else {
                                  $query = "SELECT * FROM detail_motel ORDER BY price $sort_option";
                                }
                                
                                
                              
                                $query_run = mysqli_query($con, $query);
                               

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
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
        echo '<th><a style="font-size:15px" href="page/dl_tro.php?id_motel='.$row['id_motel'].'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">xóa</a>
        <a style="font-size:15px; margin-left:59px;margin-bottom:-10px" href="page/edit_tro.php?id_motel='.$row['id_motel'].'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">sửa</a></th>';
        echo '</tr>';
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
      
<form action="page/upload.php" method="post" enctype="multipart/form-data" >
    <h1 style="text-align: center;">Thêm nhà trọ</h1>
  <div  style="width: 400px ; height: 640px ; border: 1px solid; text-align: center;margin-left: 200px"  >

  
  <div class="form-group" >
    
    <input type="text" class="form-control"   placeholder="tên trọ" name="name"> 
  </div>

  <div class="form-group" >
 
    <input type="text" class="form-control"   placeholder="địa chỉ" name="address">
  </div>

   <div class="form-group" >
    <input type="text" class="form-control"   placeholder="diện tích" name="S">
  </div>

  <div class="form-group" >
 
    <input type="text" class="form-control"   placeholder="giá" name="price">
  </div>

  <div class="form-group" >
    
    <input type="text" class="form-control"   placeholder="kiểu cho thuê" name="paradigm">
  </div>

   <div class="form-group" >
   
    <input type="text" class="form-control"   placeholder="phòng trống" name="empty_room">
  </div>

   <div class="form-group" >
   
    <input type="text" class="form-control"   placeholder="tiện ích" name="conven">
  </div>

  
 
  </div>
   <div   style="width: 400px ; height: 640px ; border: 1px solid; text-align: center;margin-left: 800px;margin-top: -640px"  >

  
   <div class="form-group" >
   
    <input type="text" class="form-control"   placeholder="khu vực" name="khuvuc">
  </div>

   <div class="form-group" >
   
    <input type="text" class="form-control"   placeholder="id tro" name="id_motel">
  </div>


   
 

   <div class="form-group" >
   
    <input type="text" class="form-control"   placeholder="IAT" name="iat">
  </div>

   <div class="form-group" >
   
    <input type="text" class="form-control"   placeholder="ING" name="ing">
  </div>

   <div class="form-group" >
   
    <input  class="w3-input w3-border w3-margin-bottom" type="file" name="fileToUpload" id="fileToUpload">
  </div>




</div>
   <button style="margin-left: 650px"  type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

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
