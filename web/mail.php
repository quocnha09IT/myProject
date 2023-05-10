 <?php 
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      if($name==''||$email==''||$subject==''||$message==''){
        echo "<script>alert(All file are requ)</script>";

      }
      else {
        $form = "tttttt";
        $webmaster = "info@gmai.com";
        $to = "quocnha09@gmail.com";  
        $subject1 = "jjj"; 

$hearders = "form: " . $form."<". $webmaster .">\r\n";
$hearders .= "X-Mailer: PHP/ " . phpversion() .">\r\n";
$hearders .= "MIME-Version: 1.0 " . ">\r\n";
$hearders .= "Content-Type: test/html; charset=ISO-8859-l\r\n";

$message = "<html><body>";
$message .="<p>name:" .$_POST['name']."</p>";
$message .="<p>email:" .$_POST['email']."</p>";
$message .="<p>phone:" .$_POST['phone']."</p>";
$message .="<p>message:" .$_POST['message']."</p>";
$message = "</html></body>";

$sendmail = mail($to, $subject1, $message, $hearders);

      }
    }
 
    ?>
