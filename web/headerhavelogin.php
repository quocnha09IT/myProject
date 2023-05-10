 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        

      <div class="logo">
        <h1><a href="hommee.php">NHÀ TRỌ</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
           
          <li><a class="nav-link scrollto active" href="hommee.php">Trang chủ</a></li>
          <li><a class="nav-link scrollto" href="inner-page.php">Tin tức</a></li>
          <li><a class="nav-link scrollto" href="#services">Hỏi đáp</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Nhà trọ</a></li>
          <li><font style="font-size: arial;"><a class="nav-link scrollto" href="#team">Đội ngũ</a></font></li> 
         
        
         
          <li><a class="nav-link scrollto" href="#contact">Về chúng tôi</a></li>
          <li><a class="getstarted scrollto" href="index_chat.php"><img style="width:25px;height:25px;border-radius: 12px; "src="php/images/<?php echo $row['img']; ?>">  <?php echo $row['fname'];echo $row['lname'] ?></a></li>
          <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Đăng xuất</a></li>
         <li><a href="myprofile.php?unique_id=<?php echo $row['unique_id']; ?>">Thông tin của tôi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>