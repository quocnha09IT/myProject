<!DOCTYPE html>
<html>
<head>
	<title>Sửa tin</title>
</head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    .css{
      width: 550px;
      height: 700px;
     background: #EEEEEE;
      text-align: center;
      margin-top: 50px;
      margin-left: 35%; 
      
    }
  
  </style>
<body>
<?php 
    session_start();
    $_SESSION["id"] = $_GET['id'];
    $id = $_GET['id'];

        $conn2 = mysqli_connect("localhost", "root", "","chatapp");
        $sql2 = "SELECT * FROM dangtin Where id = $id";
         $ketqua2 = mysqli_query($conn2,$sql2);
      
        $thongtin=mysqli_fetch_array($ketqua2);
        ?>
 <div class="css">
<form action="XLedit_tin.php" method="POST"> 
  <h1></h1>
ss
  <span>Tên Người đăng :</span> <input class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="hoten"value="<?php echo $thongtin['hoten'] ?>"> 
    <span>Khu vực :</span> <input class="form-control"  class="w3-input w3-border w3-margin-bottom" type="text" name="khuvuc" value="<?php echo $thongtin['khuvuc'] ?>">
  <span> Địa chỉ :</span> <input class="form-control"  class="w3-input w3-border w3-margin-bottom" type="text" name="diachi" value="<?php echo $thongtin['diachi'] ?>">
   <span> hình ảnh :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="file" name="hinhanh"value="<?php echo $thongtin['hinhanh'] ?>">
   <span>Email :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="email" value="<?php echo $thongtin['email'] ?>">
<span>   Tiêu đề :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="tieude" value="<?php echo $thongtin['tieude'] ?>">
   <span>Kiểu cho thuê :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="kieuchothue" value="<?php echo $thongtin['kieuchothue'] ?>">
   <span>Diện tích:</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="dientich" value="<?php echo $thongtin['dientich'] ?>">
   <span>Giá :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="gia" value="<?php echo $thongtin['gia'] ?>">
   <span>Chi tiết :</span> <input class="form-control"  class="w3-input w3-border w3-margin-bottom" type="text" name="chitiet" value="<?php echo $thongtin['chitiet'] ?>">
   <span>Ngày đăng:</span> <input class="form-control"  class="w3-input w3-border w3-margin-bottom" type="text" name="create_datetime" value="<?php echo $thongtin['create_datetime'] ?>">
   <span>Điện thoại :</span> <input class="form-control"  class="w3-input w3-border w3-margin-bottom" type="text" name="dienthoai" value="<?php echo $thongtin['dienthoai'] ?>">
  <br>
  <input  type="submit" name="suatro">
  </form>
  </div>
</body>
</html>