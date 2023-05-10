<?php
session_start();
     $connect = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

   $sql="SELECT * FROM detail_motel WHERE id_motel=".$_GET['item']."  ";
$ketqua=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($ketqua);
  ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #e9d8f4;
}

/* Header/Blog Title */
.header {
  padding: 10px;
  text-align: center;
  background: white;
  color: #58257b;
}

.header h1 {
  font-size: 40px;
}

.header p {
  font-size: 20px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #58257b;
}

/* Định dạng link điều hướng */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Thay đổi màu liên kết khi di chuột qua */
.topnav a:hover {
  background-color: #db7093;
  color: white;
}

/* Tạo hai cột không bằng nhau, float cạnh nhau */
/* Cột trái */
.leftcolumn { 
  float: left;
  width: 75%;
}

/* Cột phải */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #e9d8f4;
  padding-left: 20px;
}

/* Hình ảnh tượng trưng */
.fakeimg {
  background-color: #baa1cc;
  width: 100%;
  padding: 20px;
}

/* Thêm định dạng thẻ cho bài viết */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear float khác sau các cột */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 10px;
  text-align: center;
  background: white;
  margin-top: 10px;
}

/* Bố cục linh hoạt: các cột xếp chồng lên nhau thay vì cạnh nhau khi màn hình 
có chiều rộng dưới 700px */
@media screen and (max-width: 700px) {
  .leftcolumn, .rightcolumn { 
    width: 100%;
    padding: 0;
  }
}

/* Bố cục linh hoạt: Thanh menu điều hướng xếp chồng lên nhau thay vì cạnh nhau
khi màn hình có chiều rộng dưới 300px  */
@media screen and (max-width: 300px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
div.stars {
  width: 270px;
  display: inline-block;
}
 
input.star { display: none; }
 
label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}
 
input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}
 
input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
 
input.star-1:checked ~ label.star:before { color: #F62; }
 
label.star:hover { transform: rotate(-15deg) scale(1.3); }
 
label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #3e94ec;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
</style>
</head>
<body>
<?php 
$connect1 = mysqli_connect("localhost","root","","chatapp")
or die("Can not connect database");

$sql1="SELECT * FROM motel ";
$ketqua1=mysqli_query($connect1,$sql1);
mysqli_num_rows($ketqua1);

$row1=mysqli_fetch_array($ketqua1);?>
<div class="header">
  <h1>Thông tin nhà trọ </h1>
  <p>Kiến thức - Kinh nghiệm - Hỏi đáp</p>
</div>
<div class="topnav">
 
  <?php  echo "<p ><a class='btn btn-primary' href='dangkyphong.php?item=$row[id_motel]'>đăng ký</a></p>"; ?>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div class="table-title">
</div>
<table class="table-fill">
<thead>

</thead>
<tbody class="table-hover">




 <tr>
<td class="text-left">Địa chỉ</td>
<td class="text-left"><?php echo"$row[address]" ?></td>
</tr>
<tr>
<td class="text-left">Mô hình</td>
<td class="text-left"><?php echo"$row[paradigm]" ?></td>
</tr>
<tr>
<td class="text-left">Giá</td>
<td class="text-left"><?php echo"$row[price]" ?></td>
</tr>
<tr>
<td class="text-left">Diện tích</td>
<td class="text-left"><?php echo"$row[S]" ?></td>
</tr>
<tr>
<td class="text-left">Số phòng còn lại</td>
<td class="text-left"><?php echo"$row[empty_room]" ?></td>
</tr>
<tr>
<td class="text-left">Tiện nghi</td>
<td class="text-left"><?php echo"$row[conven]" ?></td>
</tr>

</tbody>
</table>
    </div>
    <div class="card">
      <h2>Mô tả chi tiết</h2>
      
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2 ><center>Người đăng</center></h2>
      <h5 ><center>Họ tên</center></h5>
      <h5 ><center>Ngày đăng</center></h5>
      <h5 ><center>phone</center></h5>
      <h6 ><center>Người đăng</center></h6>

      
    </div>
    <div class="card">
      <center><a href=""><h6>Đăng nhập để đặt phòng</h6></a></center>
    </div>
    <div class="card">
      <center><h3>Báo cáo</h3></center>
      <center><a href=""><h6>Đăng nhập để báo cáo</h6></a></center>
    </div>
    <div class="card">
      <h2>Đánh giá của bạn</h2>
<div class="stars">
  
<div class="container">
    <div class="row">
 
<form action="" method="post">
 
    <div>
        <h3></h3>
    </div>
 
    <div>
         <label>Name</label>
        <input type="text" name="name">
    </div>
 
         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>
 
    <div><input type="submit" name="add"> </div>
 
</form>
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

<div class="footer">
  <h4>Giấy phép số 362/GP-BTTTT. Bộ TT&TT cấp ngày 30/06/2016.</h4>
</div>

</body>
</html>