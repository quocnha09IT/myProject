<!DOCTYPE html>
<html>
<head>
	<title>sua san pham</title>
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
    $_SESSION["id_motel"] = $_GET['id_motel'];
    $id = $_GET['id_motel'];

        $conn2 = mysqli_connect("localhost", "root", "","chatapp");
        $sql2 = "SELECT * FROM detail_motel Where id_motel = $id";
         $ketqua2 = mysqli_query($conn2,$sql2);
      
        $thongtin=mysqli_fetch_array($ketqua2);
        ?>
 <div class="css">
<form action="XLedit_tro.php" method="POST"> 
  <h1></h1>
  <span>Tên trọ :</span> <input class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="name"value="<?php echo $thongtin['name'] ?>"><
    <span>Địa chỉ :</span> <input class="form-control"  class="w3-input w3-border w3-margin-bottom" type="text" name="address" value="<?php echo $thongtin['address'] ?>">
  <span> Kiểu cho thuê :</span> <input class="form-control"  class="w3-input w3-border w3-margin-bottom" type="text" name="paradigm" value="<?php echo $thongtin['paradigm'] ?>">
   <span> hình ảnh :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="file" name="img"value="<?php echo $thongtin['img'] ?>">
   <span> Giá :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="price" value="<?php echo $thongtin['price'] ?>">
<span>   Diện tích :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="S" value="<?php echo $thongtin['S'] ?>">
   <span>Phòng trống :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="empty_room" value="<?php echo $thongtin['empty_room'] ?>">
   <span>Tiện ích :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="conven" value="<?php echo $thongtin['conven'] ?>"><
   <span>Id trọ :</span> <input  class="form-control" class="w3-input w3-border w3-margin-bottom" type="text" name="id_motel" value="<?php echo $thongtin['id_motel'] ?>">
   <span>Khu vực :</span> <input class="form-control"  class="w3-input w3-border w3-margin-bottom" type="text" name="khuvuc" value="<?php echo $thongtin['khuvuc'] ?>">
  <br>
  <input  type="submit" name="suatro">
  </form>
  </div>
</body>
</html>