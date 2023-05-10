<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: hommee.php");
  }
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Đăng nhập</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Nhập Email</label>
          <input type="text" name="email" placeholder="Email của bạn" required>
        </div>
        <div class="field input">
          <label>Mật khẩu</label>
          <input type="password" name="password" placeholder="Mật khẩu của bạn" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Đăng nhập">
        </div>
      </form>
      <div class="link">Nếu bạn chưa có tài khoản ? <a href="index.php">Đăng ký ngay!</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login1.js"></script>

</body>
</html>
