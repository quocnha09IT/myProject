  <?php session_start();
  include_once "php/config.php";
  $id=$_SESSION['unique_id'];
  
            $sql = mysqli_query($conn, "SELECT * FROM users where unique_id =  $id");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
  ?>
  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tìm kiếm nhà trọ cho bạn</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
 <meta charset="UTF-8">
  <!-- =======================================================
  * Template Name: Vesperr - v4.6.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
    .img-fluid{
      height: 350px;
      width: 700px;
    }
  </style>
</head>

<body>

 
  <!-- ======= Header ======= -->
  <?php
  if(isset($_SESSION['unique_id'])){
   include_once "headerhavelogin.php";
  }else{ include_once "headernologin.php";}
 ?>
 
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Chào mừng bạn đến với Website</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Bạn đã có trọ cho mình chưa hãy đăng kí ngay nhé !!!!</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="dangki.php" class="btn-get-started scrollto">Đăng tin ngay</a>
          </div>
        </div>
      
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      
    </section><!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Về chúng tôi</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Trang web của chúng tôi chỉ đơn giản là một trang web giúp mọi người tiềm kiếm và thuê phòng trọ một cách đơn giản, hiệu quả và dễ dàng sử dụng. 
            </p>
            <ul>
              <img src="img/tro6.jpg" alt="" class="img-fluid">
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              Nhu cầu thuê phòng trọ của sinh viên vô cùng đa dạng, số lượng lớn mang tới một lĩnh vực đầu tư kinh doanh lý tưởng cho nhiều người. Việc cho thuê trọ có thể tiếp cận qua nhiều kênh thông tin khác nhau và giúp người thuê dễ dàng tìm hiểu được tin tức. Thông qua những website tìm phòng trọ, cho thuê nhà trọ sinh viên mang tới sự chủ động, lợi ích và hiệu quả cao cho cả người cho thuê lẫn khách thuê tốt nhất. 
            </p>
            <a href="#" class="btn-learn-more">Tìm hiểu thêm</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end=" <?php 
        $conn = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "SELECT * FROM users ";
        $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($ketqua);
        echo "$row";
        ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tài khoản đã đăng kí</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="<?php 
        $conn = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "SELECT * FROM dangtin ";
        $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($ketqua);
        echo "$row";
        ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tin đã được đăng</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="<?php 
        $conn = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "SELECT * FROM messages ";
        $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($ketqua);
        echo "$row";
        ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tin nhắn tương tác</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="<?php 
        $conn = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "SELECT * FROM rate ";
        $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($ketqua);
        echo "$row";
        ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Lượt đánh giá</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
   <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>CÁC CÂU HỎI THƯỜNG GẶP</h2>
          <form action="cmt.php" method="POST">
      <div style="text-align: center;">
    Đặt câu hỏi cho admin: <input type="text" name="question">  <input type="submit" name="binhluan">
    </div>

</form> 
        </div>
    <?php 
$query = "SELECT * FROM question ";

                $conn =  mysqli_connect("localhost", "root", "", "chatapp");
                $sql = mysqli_query($conn,$query);
                $num = mysqli_num_rows($sql);
                 while ($row = mysqli_fetch_assoc($sql)) {
                echo '<div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">';
                echo '<div class="col-lg-5">';
                echo '<i class="ri-question-line"></i>';
                echo '<h4>'.$row['question'].'</h4>';
                echo '</div>';
                echo '<div class="col-lg-7">';
                echo '<p>'.$row['reply'].'</p>';
                echo '</div>';
                echo '</div>';
            
                 }
    ?>
   

    </section><!-- End F.A.Q Section -->

    </section><!-- End Services Section -->
     
  <div class="album py-5 bg-light">
        <div class="container">                 

</div>
</div>



   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Chứng thực</h2>
          <p>Thông tin về những người tạo website</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/IMG20211009212709.jpg" class="testimonial-img" alt="">
                  <h3>Công Hoàng</h3>
                  <h4>Đẹp trai &amp; Vui tính</h4>
                  <h4>Người thiết kế</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Là một người năng động có nhiệt huyết và đam mê lập trình. Hiện tại đang là sinh viên tại trường Đại hoc CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG VIỆT HÀN.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/team2.jpg" class="testimonial-img" alt="">
                  <h3>Quốc Nhã</h3>
                  <h4>Hòa đồng &amp; Dễ gần</h4>
                  <h4>Người thiết kế</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Là một người ít nói nhưng rất dễ gần và cũng có niềm đam mê lập trình. Hiện tại đang là sinh viên tại trường Đại hoc CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG VIỆT HÀN.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            

            

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Trọ tiêu biểu</h2>
          <p>Một số trọ được nhiều người truy cập</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>
        <!--  <form action="find.php" method="get">
                 <input class="form-control" type="text" name="search" placeholder="tìm kiếm khu vực trọ " />
                <input  type="submit" name="ok" value="search" />
            </form> -->
 <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Giá trọ rẻ nhất </label>
                                    <input type="text" name="start_price" value="<?php if(isset($_GET['start_price'])){echo $_GET['start_price']; }else{echo "1000000";} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">trọ đắt nhất</label>
                                    <input type="text" name="end_price" value="<?php if(isset($_GET['end_price'])){echo $_GET['end_price']; }else{echo "9000000";} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Click ở đây</label> <br/>
                                    <button type="submit" class="btn btn-primary px-4">Lọc</button>
                                </div>
                            </div>
                        </form> <br> <br>
  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
     <?php  
                        $con = mysqli_connect("localhost","root","","chatapp");

                        if(isset($_GET['start_price']) && isset($_GET['end_price']))
                        {
                            $startprice = $_GET['start_price'];
                            $endprice = $_GET['end_price'];

                            $query = "SELECT * FROM detail_motel WHERE price BETWEEN $startprice AND $endprice ";
                        }
                        else
                        {
                            $query = "SELECT * FROM detail_motel";
                        }
                        
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                // 
                               echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">';
        echo '<div class="portfolio-wrap">';
        echo "<img src='img/$row[img]' class='img-fluid'>";
        echo '<div class="portfolio-info">';
        echo '<h4> Nhà Trọ : '.$row['name'].'</h4>';
        echo '<p> Khu Vực : '.$row['khuvuc'].'</p>';
        echo '<p> Kiểu Cho Thuê : '.$row['paradigm'].'</p>';
         echo '<p> Giá : '.$row['price'].'</p>';
        echo '<div class="portfolio-links">';
        echo  "<a href='img/$row[img]' data-gallery='portfolioGallery' class='portfolio-lightbox' title='App 1'><i class='bx bx-plus'></i></a>";
        echo "<a href='portfolio-details.php?item=$row[id_motel]' title='More Details'><i class='bx bx-link'></i></a>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }
                        ?>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Đội ngũ</h2>
          <p>Mọi người có thể liên lạc trực tiếp cho chúng tôi!</p>
        </div>

        <div class="row"><center>
 <?php 
$query = "SELECT * FROM team ";

                $conn =  mysqli_connect("localhost", "root", "", "chatapp");
                $sql = mysqli_query($conn,$query);
                $num = mysqli_num_rows($sql);
                 while ($row = mysqli_fetch_assoc($sql)) {
                echo '<div class="col-lg-3 col-md-6 d-flex align-items-stretch">';
                echo '<div class="member" data-aos="fade-up" data-aos-delay="100">';
                echo '<div class="member-img">';
                echo "<img src='img/$row[img]' class='img-fluid' >";
                echo '<div class="social">';
                echo "<a href='$row[fb]'><i class='bi bi-facebook'></i></a>";
                echo '</div>';
                echo '</div>';
                echo '<div class="member-info">';
                echo '<h4>'.$row['name'].'</h4>';
                echo '<h7>'.$row['email'].'</h7>';
                echo '<span>'.$row['description'].'</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                 }
    ?>
             </center>   
              
                
          

        </div>

      </div>
    </section><!-- End Team Section -->
       <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
              <!-- <a href=""><i class="bi bi-instagram"></i></a> -->  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Liên hệ với chúng tôi</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100004145987072" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>Sinh viên trường CNTT và TT Việt Hnaf<br>Ngũ Hành Sơn - Đà Nẵng</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>vuongconghoang2406@gmail.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>0326529167</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form id="myForm" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tên của bạn" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email của bạn" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Chủ đề" required>
              </div>
              <div class="form-group">
                <textarea id="body" class="form-control" name="message" rows="5" placeholder="Nội dung" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"> <button type="button" onclick="sendEmail()" value="Send An Email">Gửi thông tin </button></div>
            </form>
            
      
           
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          
          
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Trang chủ</a>
            <a href="#about" class="scrollto">Về chúng tôi</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
   
</body>

</html>