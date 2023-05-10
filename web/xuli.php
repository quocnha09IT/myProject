<?php
$target_dir = "img/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
// var_dump($target_file);exit;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "chatapp") or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$hoten = trim($_POST['hoten']);
$khuvuc = trim($_POST['khuvuc']);
$create_date = trim($_POST['create_date']);
$dienthoai = trim($_POST['dienthoai']);
$diachi = trim($_POST['diachi']);
$email = trim($_POST['email']);
$tieude = trim($_POST['tieude']);
$kieuchothue = trim($_POST['kieuchothue']);
$dientich = trim($_POST['dientich']);
$gia = trim($_POST['gia']);
$hinhanh = trim($_FILES["fileToUpload"]["name"]);
$chitiet = trim($_POST['chitiet']);
if (empty($hoten)) {
array_push($errors, "Username is required"); 
}
if (empty($dienthoai)) {
array_push($errors, "Email is required"); 
}
if (empty($diachi)) {
array_push($errors, "Password is required"); 
}
if (empty($email)) {
array_push($errors, "Two password do not match"); 
}
if (empty($tieude)) {
array_push($errors, "Username is required"); 
}
if (empty($kieuchothue)) {
array_push($errors, "Email is required"); 
}
if (empty($dientich)) {
array_push($errors, "Password is required"); 
}
if (empty($gia)) {
array_push($errors, "Two password do not match"); 
}
if (empty($hinhanh)) {
array_push($errors, "Username is required"); 
}
if (empty($chitiet)) {
array_push($errors, "Two password do not match"); 
}





// Kiểm tra username hoặc email có bị trùng hay không

// Thực thi câu truy vấn


// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL

    $sql ="INSERT INTO `dangtin` (`id`, `hoten`, `khuvuc`, `diachi`, `email`, `tieude`, `kieuchothue`, `dientich`, `gia`, `hinhanh`, `chitiet`,`create_date`, `dienthoai`) VALUES (NULL, '$hoten', '$khuvuc', '$diachi', '$email', '$tieude', '$kieuchothue', '$dientich', '$gia', '$hinhanh', '$chitiet','create_date',$dienthoai')";
$result = mysqli_query($conn, $sql); 




/*if (mysqli_query($conn, $sql)){
echo "Họ tên: ".$_POST['hoten']."<br/>";
echo "Điện thoại: " .$_POST['dienthoai']."<br/>";
echo "Địa chỉ: ".$_POST['diachi']."<br/>";
echo "Email: ".$_POST['email']."<br/>";
echo "Tiêu đề: ".$_POST['tieude']."<br/>";
echo "Kiểu cho thuê: ".$_POST['kieuchothue']."<br/>";
echo "Diện tích: ".$_POST['dientich']."<br/>";
echo "Giá: ".$_POST['gia']."<br/>";
echo "Hình ảnh: ".$_POST['hinhanh']."<br/>";
echo "Chi tiết: ".$_POST['chitiet']."<br/>";
echo "khuvuc: ".$_POST['khuvuc']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangnhap.php";</script>';
}
*/
}
 else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  if ($uploadOk==1)
  {
      // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
      {
          

          header("location:homme.php");
        setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);

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

?>