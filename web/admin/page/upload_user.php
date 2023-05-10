<?php
$target_dir = "../img";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
// var_dump($target_file);exit;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
      $unique_id = $_POST['unique_id'];
      $lname = $_POST['lname'];
      $fname = $_POST['fname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $img = $_FILES["fileToUpload"]["name"];
      $status = $_POST['status'];

        $conn  = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "INSERT INTO users (unique_id, lname, fname, email, password,img,status) VALUES ( '$unique_id',$lname, $fname, '$email', '$password','$img',$status)";
        $ketqua = mysqli_query($conn,$sql);
      
        header("location:index.php?page=1");
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
