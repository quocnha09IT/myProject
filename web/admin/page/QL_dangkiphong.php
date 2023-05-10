<style type="text/css">
  th{
    text-align: center;
    background: yellow;
    border: solid;
  }
  td{
    border: solid;
  }
</style>
 <style>
            body{
                font-family: arial;
            }
            .container{
                width: 800px;
                margin: 0 auto;
            }
            #send-email-form label {
                width: 150px;
                display: inline-block;
            }
            #send-email-form input {
                margin-bottom: 10px;
                line-height: 32px;
            }
            #send-email-form textarea {
                width: 500px;
                height: 200px;
            }
            #send-email-form input[type=submit] {
                margin-top: 35px;
                height: 32px;
                margin-left: 150px;
            }
        </style>
<table class="table table-striped" style="text-align: center; border: solid; ">
  <thead style="border: solid;">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ</th>
      <th scope="col">Tên</th>
      <th scope="col">Email</th>
      <th scope="col">Quốc Tịch</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">điện thoại</th>
      <th scope="col">Số căn cước</th>
      <th scope="col">Nghề nhgiệp</th>
      <th scope="col">Ngày ĐK</th>
      <th scope="col">Ngày nhận</th>
      <th scope="col">Tên tài khoản</th>
      <th scope="col">Tên ngân hàng</th>
      <th scope="col">Mã số thuế</th>
      <th scope="col">STK</th>
      <th scope="col">Thao tác</th>

    </tr>
  </thead>
  <tbody>
   
  <?php 
$conn = mysqli_connect("localhost","root","","chatapp");
$sql = "SELECT * FROM registration_room";
$ketqua = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($ketqua)) {
  $show = $row['show'];
  $msg = "";
  if ($show != 1) {
    $msg="chưa nhận";
  }else{
    $msg="đã nhận";
  }

  echo "<tr>";
  echo '<td>'.$msg.'</td>';
  echo '<td>'.$row['fname'].'</td>';
  echo '<td>'.$row['lname'].'</td>';
  echo '<td>'.$row['email'].'</td>';
  echo '<td>'.$row['quoctich'].'</td>';
  echo '<td>'.$row['diachi'].'</td>';
  echo '<td>'.$row['dienthoai'].'</td>';
  echo '<td>'.$row['cancuoc'].'</td>';
  echo '<td>'.$row['nghenghiep'].'</td>';
  echo '<td>'.$row['ngaydk'].'</td>';
  echo'<td>'.$row['ngaynhan'].'</td>';
  echo '<td>'.$row['tenTKKH'].'</td>';
  echo '<td>'.$row['tenNH'].'</td>';
  echo '<td>'.$row['ma'].'</td>';
  echo '<td>'.$row['STK'].'</td>';
  echo '<td><a href="page/xacnhan.php?id='.$row['id'].'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">nhận</a><br>
  <a href="page/huy.php?id='.$row['id'].'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">hủy</a></td>';
  echo " </tr>";

}
  ?>
    
      
    </tbody>
</table>
        <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

if (isset($_GET['action']) && $_GET['action'] == "send") {
            if (empty($_POST['email'])) { //Kiểm tra xem trường email có rỗng không?
                $error = "Bạn phải nhập địa chỉ email";
            } elseif (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error = "Bạn phải nhập email đúng định dạng";
            } elseif (empty($_POST['content'])) { 
                $error = "Bạn phải nhập nội dung";
            }
            if (!isset($error)) {
                include 'library.php'; 
                require 'vendor/autoload.php';
                $mail = new PHPMailer(true);                              
                try {
                    
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 
                    $mail->isSMTP();                                      
                    $mail->Host = SMTP_HOST;  
                    $mail->SMTPAuth = true;                               
                    $mail->Username = SMTP_UNAME;                 
                    $mail->Password = SMTP_PWORD;                           
                    $mail->SMTPSecure = 'ssl';                             
                    $mail->Port = SMTP_PORT;                                    
                    
                    $mail->setFrom(SMTP_UNAME, "Tên người gửi");
                    $mail->addAddress($_POST['email'], 'Tên người nhận');     
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');

                    $mail->isHTML(true);                                  
                    $mail->Subject = $_POST['title'];
                    $mail->Body = $_POST['content'];
                    $mail->AltBody = $_POST['content']; 
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
            ?>
            <div class = "container">
                <div class = "error"><?= isset($error) ? $error : "Gửi email thành công" ?></div>
                <a href = "?page=5">Quay lại form gửi mail</a>
            </div>
        <?php } else {
            ?>
            <div class="container">
                <h1>Gởi mail hồi đáp </h1>
                <form id="send-email-form" method="POST" action="?page=5&&action=send">
                   
                    <input type="text" name="email" value="" placeholder="email nhận" br/>
                   
                    <input type="text" name="title" value="" placeholder="tiêu đề" /><br/>
                     <textarea name="content" placeholder="nội dung"></textarea><br/>
                    <input type="submit" value="Gởi" />
                </form>
            </div>
<?php } ?>
   
  
