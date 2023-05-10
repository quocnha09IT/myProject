
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Vesperr Bootstrap Template</title>
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
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

  <!-- =======================================================
  * Template Name: Vesperr - v4.6.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Danh mục</a></h1>
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
          
         
            
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Chi tiết danh mục đầu tư</h2>
          <ol>
            <li><a href="hommee.php">Trang chủ</a></li>
            
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <?php 
  
    $id_motel = $_GET['item'];
    $connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

$sql="SELECT * FROM detail_motel Where id_motel = $id_motel ";
$ketqua=mysqli_query($connect,$sql);

$row = mysqli_fetch_array($ketqua);

  ?>

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <?php 
                       echo '<div class="swiper-slide">';
                       echo "<img src='img/$row[img]'>";
                       echo '</div>'
                   ?>
                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

<div class="form-floating mb-3">
    <div class="container">
     <h2 class="text-center">Bình Luận</h2>
      <div class="card">
        <div class="card-body">
          
  <?php 
  $connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");



$id_motel = $_GET['item'];
$sql1="SELECT * FROM rate Where id_motel = $id_motel ";
$ketqua1=mysqli_query($connect,$sql1);
while($row1 = mysqli_fetch_array($ketqua1)){
$idcmt=$row1['id'];
$uniqueid=$row1['unique_id'];

// select user comment
$sql2 = "SELECT * FROM users Where unique_id = $uniqueid ";
$ketqua2 = mysqli_query($connect,$sql2);
$row2 = mysqli_fetch_array($ketqua2);


echo '<div class="row">';
echo '<div class="col-md-2">';
echo "<img src='php/images/$row2[img]' class='img img-rounded img-fluid'>";
echo '</div>';
echo '<div class="col-md-10">';
echo '<p>';
echo '<a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>'.$row2['lname'].'</strong></a>';
echo '</p>';
echo '<div class="clearfix"></div>';
echo '<p>'.$row1['comment'].'</p>';
echo '<p>';


echo '<form method="POST" action="reply.php">';
echo '<div class="input-group mb-3">';
echo '<input type="hidden" name="id_cmt" value="'.$idcmt.'">';
echo '<input type="hidden" name="id_repper" value="'.$_SESSION['unique_id'].'">';
echo '<input type="text" class="form-control" name="rep" placeholder="Trả lời">';

echo ' <div class="input-group-append">';
echo ' <button class="btn btn-success" type="submit"><i class="fa fa-reply"></i> Reply</button>';

echo ' </div>';
echo '</div>';
echo '</form>';
echo '</p>';
echo '</div>';
echo '</div>';



    $connect4 = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

$sql4="SELECT * FROM reply Where id_comment = $idcmt ";
$ketqua4=mysqli_query($connect4,$sql4);
while($row4 = mysqli_fetch_array($ketqua4)) {
$uniqueidrl=$row4['id_reper'];
// select user reply
$sql3 = "SELECT * FROM users Where unique_id = $uniqueidrl ";
$ketqua3 = mysqli_query($connect,$sql3);
$row3 = mysqli_fetch_array($ketqua3);
echo '<div class="card card-inner">';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col-md-2">';
echo "<img src='php/images/$row3[img]' class='img img-rounded img-fluid'>";
echo '</div>';
echo '<div class="col-md-10">';
echo '<p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>'.$row3['lname'].'</strong></a></p>';

echo '<p>';

echo '<p>'.$row4['rep'].'</p>';



echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

}
}


  ?>  
          </div>
        </div>
       </div>

     </div>
     </div>
 

          <div class="col-lg-4">

          <div class="portfolio-info">
     <?php  
  
  echo '<h3>'.$row['name'].'</h3>';
  echo '<ul>';
 
  echo '<li><strong>Địa Chỉ: </strong> '.$row['address'].'</li>';
  echo '<li><strong>Kiểu cho thuê  </strong>: '.$row['paradigm'].'</li>';
  echo '<li><strong>Giá : </strong> '.$row['price'].'</li>';
  echo '<li><strong>Diện tích : </strong> '.$row['S'].'</li>';
  echo '<li><strong>Tiện ích : </strong> '.$row['conven'].'</li>';
  echo '<li><strong>Khu vực : </strong> '.$row['khuvuc'].'</li>';
  echo '<li><strong>Tên nhà trọ : </strong> '.$row['name'].'</li>';
  echo '</ul>';

 
    /**/
    /*<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>*/

   ?>
          
<?php 

$id=$_SESSION['unique_id'] ;
$id_motel = $_GET['item'];

$conn = mysqli_connect("localhost", "root", "", "chatapp");
$sql = "SELECT * FROM users Where unique_id = $id";
$ketqua = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($ketqua);
?>      
              
             
            </div>
     <div class="portfolio-description">      
     <h1>Hãy để lại bình luận và đánh Giá của bạn</h1>
            <form  action="cmt1.php" method="post"> 
                  <textarea name="comment" style="height: 200px;width: 400px"></textarea>
                  <input type="hidden" name="name" value="<?php echo $row['lname'] ?>">
                  <input type="hidden" name="unique_id" value="<?php echo $row['unique_id'] ?>">
                  <input type="hidden" name="id_motel" value="<?php echo $id_motel ?>">
                  
                   <div class="rateyo" id= "rating"
                        data-rateyo-rating="4"
                        data-rateyo-num-stars="5"
                        data-rateyo-score="3">
                   </div>
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    
                   <input type="submit" name="gui">
            </form> 
         
     
    </div>

        </div>

      </div>


    </section><!-- End Portfolio Details Section -->

   
 

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>

<?php
$servername = "localhost";//Server Name
$username = "root";//Server User Name
$password = "";//Server Password
$dbname = "chatapp";//Database Name

//Create DB Connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $rating = $_POST["rating"];
 
    $sql = "INSERT INTO rate (name,rating) VALUES ('$name','$rating')";
    if (mysqli_query($conn, $sql))
    {
        echo "New Rate addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

</div>
    </div>
    <div class="card">
      
      <!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-identifier="item_1"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
    </div>
  </div>
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
         
        </div>
        <div class="col-lg-6">
          
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

</body>

</html>