<!DOCTYPE html>
<html>
<head>
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
*{
    padding: 0px;
    margin: 0px;
    font-family: sans-serif;
    box-sizing: border-box;
}
.container{
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}
.col-6{
    float: left;
    width: 50%;
}
.margin_b{
    margin-bottom: 7.5px;
}
.clear{
    clear: both;
}
header{
    background-color: #cccccc;
    min-height: 70px;
    padding: 15px;
}
main{
    background-color: #dddddd;
    min-height: 300px;
    padding: 7.5px 15px;
}
footer{
    background-color: #cccccc;
    min-height: 70px;
    padding: 15px;
}
h1{
    color: #009999;
    font-size: 20px;
    margin-bottom: 30px;
}

.register-form{
    width: 100%;
    max-width: 400px;
    margin: 20px auto;
    background-color: #ffffff;
    padding: 15px;
    border: 2px dotted #cccccc;
    border-radius: 10px;
}

.input-box{
    margin-bottom: 10px;
}
.input-box input[type='text']{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    display: inline-block;
    height: 40px;
    color: #666666;
}
.input-box select{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    display: inline-block;
    height: 40px;
    color: #666666;
}
.input-box option{
    font-size: 16px;
}
.input-box input[type='checkbox']{
    height: 1.5em;
    width: 1.5em;
    vertical-align: middle;
    line-height: 2em;
}
.input-box textarea{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    min-height: 120px;
    color: #666666;
}
.btn-box{
    text-align: right;
    margin-top: 30px;
}
.btn-box button{
    padding: 7.5px 15px;
    border-radius: 2px;
    background-color: #009999;
    color: #ffffff;
    border: none;
    outline: none;
}


.test{

    height:50px;
    width:100px;
}
.green-square {
    
          width: 100px;
          height: 100px;
          position: absolute;
          left: 50%;
          margin-left: -50px;
        }
        .card1 {
  background-color: white;
  width: 1110px;
  height: 200px;
  padding: 20px;
  margin-top: 20px;
}
       p.left {
       text-align: left;
    }
    .button {
  background-color: white;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
 * {box-sizing: border-box}
 body{
   font-family: 'Noto Sans JP', sans-serif;
 }
 h1, label{
   color: DodgerBlue;
 }
   input[type=text], input[type=password] {
   width: 100%;
   padding: 15px;
   margin: 5px 0 22px 0;
   display: inline-block;
   border: none;
   width:100%;
   resize: vertical;
   padding:15px;
   border-radius:15px;
   border:0;
   box-shadow:4px 4px 10px rgba(0,0,0,0.2);
 }
input[type=text]:focus, input[type=password]:focus {
   outline: none;
 }
hr {
   border: 1px solid #f1f1f1;
   margin-bottom: 25px;
 }
button {
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 100%;
   opacity: 0.9;
 }
button:hover {
   opacity:1;
 }
.cancelbtn {
   padding: 14px 20px;
   background-color: #f44336;
 }
.signupbtn {
   float: left;
   width: 100%;
   border-radius:15px;
   border:0;
   box-shadow:4px 4px 10px rgba(0,0,0,0.2);
 }
.container {
   padding: 16px;
 }
.clearfix::after {
   content: "";
   clear: both;
   display: table;
 }

</style>
</head>
<body>

<div class="header">
  <h1 style="color: green;">ĐĂNG TIN THUÊ TRỌ</h1>
  <p style="color: green;">Dễ dàng - Tiện ích - Nhanh chóng</p>
</div>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <form method="post" action="xuli.php" class="form" method="post" enctype="multipart/form-data">
      </form>
    </div>
    <div class="card">
      <form method="post" action="xuli.php" class="form" method="post" enctype="multipart/form-data">

<h1 style="color: green" style="background: center;">Đăng ký</h1>
            <div class="input-box">

<input type="text" placeholder="Họ Tên*" name="hoten" value="" required>
            </div>
            <div class="input-box">


              <input type="text" placeholder="Khu vực*" name="khuvuc" value="" required>
            </div>
            <div class="input-box">

<input type="text" placeholder="Điện thoại*" name="dienthoai" value="" required>
            </div>

<div class="input-box">

            <input type="text" placeholder="Địa chỉ*" name="diachi" value="" required>
            </div>

<div class="input-box">

            <input type="text" placeholder="Email*" name="email" value="" required>
            </div>

<div class="input-box">

            <input type="text" placeholder="Tiêu đề tin*" name="tieude" value="" required>
            </div>

<div class="input-box">

            <input type="text" placeholder="Kiểu cho thuê*" name="kieuchothue"value="" required>
            </div>

<div class="input-box">

           <input type="text" placeholder="Diện tích(m2)*" name="dientich" value="" required>
            </div>

<div class="input-box">

           <input type="text" placeholder="Giá cả*" name="gia"value="" required>
            </div>
            <div class="input-box">

           Hình ảnh: <input class="form-control" type="file" name="fileToUpload" multiple="" name="fileToUpload" value="" required>
            </div>


<div class="input-box">

           <input type="text" class="form-control" placeholder="Chi tiết*" name="chitiet" value="" required>
          <!--  <input type="date" class="form-control" placeholder="Ngày đăng*" name="chitiet" value="" required> -->
            </div>

<div class="input-box" style="text-align: center;">

            <input type="date" placeholder="Ngày đăng*" name="create_date" value="" required>
            </div>      
    

<button type="submit" name="dangky" value="Đăng Ký"/>Đăng Ký</button>

</form>

    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h1 style="color: green">Hướng dẫn đăng tin</h1>
    <div class="input-box">
        <p class="left" size="2px"><em>-Thông tin có dấu * là bắt buộc.</em></p>
        <p class="left" size="2px"><em>-Không gộp nhiều bất động sản trong một tin rao.</em></p>
       <p class="left" size="2px"><em>-Không đăng lại tin đã đăng trên Timnhatro.vn.</em></p>
    <p class="left" size="2px"><em>-Tiêu đề nội dung phải viết bằng tiếng việt có dấu.</em></p>
        <p class="left" size="2px"><em>-Quý khách nên nhập đầy đủ thông tin vào các mục để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn.</em></p>  
        <p class="left" size="2px"><em>-Tin đăng có hình ảnh rõ ràng sẽ được xem và gọi gấp nhiều lần so với tin rao không có ảnh. Hãy đăng ảnh để được giao dịch nhanh chóng!</em></p>
    </div>
    <div class="card">
      <h3>Hình ảnh</h3>
      <p class="left" size="2px"><em>-Tối đa 6 ảnh với tin thường và 16 ảnh với tin VIP. Dung lượng không quá 6MB</em></p>
      <p class="left" size="2px"><em>-Thay đổi vị trí của ảnh bằng cách kéo ảnh vào vị trí mà bạn muốn.</em></p>
      <p class="left" size="2px"><em>-Tin đăng có ảnh được khách xem gấp 10 lần tin không ảnh. </em></p>
      <p class="left" size="2px"><em>-Bạn nên đăng ảnh cho tin của mình.</em></p>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <button class="test" style="background-color: #FFCC99; color: red " type="submit"><a href="https://www.facebook.com/profile.php?id=100004145987072">Facebook</a></button> 
    <button class="test" style="background-color: #FFCC99; color: red " type="submit"><a href="https://www.youtube.com/channel/UCx9tBXP-JRL5Gyw1d3t8Xvg">Youtube</a></button>
    </div>
  </div>
</div>
<br>



</body>
</html>