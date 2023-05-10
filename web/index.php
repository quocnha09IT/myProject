<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Họ </label>
            <input type="text" name="fname" placeholder="Họ " required>
          </div>
          <div class="field input">
            <label>Tên </label>
            <input type="text" name="lname" placeholder="Tên " required>
          </div>
        </div>
        <div class="field input">
          <label>Email của bạn</label>
          <input type="text" name="email" placeholder="Email của bạn" required>
        </div>
        <div class="field input">
          <label>Tạo mật khẩu</label>
          <input type="password" name="password" placeholder="Nhập mật khẩu của bạn" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Chọn hình ảnh</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Đăng ký">
        </div>
      </form>
      <div class="link">Bạn đã có tài khoản? <a href="login.php">Đăng nhập ngay</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
