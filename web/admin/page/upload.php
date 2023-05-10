<?php
$target_dir = "webnhatro/img/";

$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

// var_dump($target_file);exit;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $S = $_POST['S'];
    $img = $_FILES["fileToUpload"]["name"];
    $price = $_POST['price'];
    $paradigm = $_POST['paradigm'];
    $empty_room = $_POST['empty_room'];
    $conven = $_POST['conven'];
    $khuvuc = $_POST['khuvuc'];
    $id_motel = $_POST['id_motel'];
     $iat = $_POST['iat'];
      $ing = $_POST['ing'];
        

        $conn  = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "INSERT INTO `detail_motel`(`id`, `address`, `paradigm`, `price`, `S`, `empty_room`, `conven`, `id_motel`, `khuvuc`, `img`, `name`, `lat`, `lng`) VALUES ('NULL', '$address', '$paradigm', '$price',  '$S', '$empty_room', '$conven', '$id_motel', '$khuvuc', '$img', '$name', '$iat', '$ing')";
                $ketqua = mysqli_query($conn,$sql);
      
         header("location:../?page=0");
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  if ($uploadOk==1)
  {
      // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
      {
          echo "File ". basename( $_FILES["fileToUpload"]["name"]).
          " Đã upload thành công.";

          echo "File lưu tại " . $target_file;

      }
      else
      {
          echo "Có lỗi xảy ra khi upload file.";
      }
  }
  else
  {
      echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
  }
}
?>
