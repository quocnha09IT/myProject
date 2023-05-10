<!DOCTYPE html>
<html>
<head>
	<title> My Profile</title>
</head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/css">
   @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif
}

.container {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #eee
}

.card {
    width: 350px;
    height: 540px;
    background-color: #fff;
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
     overflow: hidden
}

.card .info {
    padding: 15px;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #e1dede;
    background-color: gray;
}

.card .info button {
	height: 30px;
    width: 80px;
    border: none;
    color: #fff;
    border-radius: 4px;
    background-color: blue;
    cursor: pointer;
    text-transform: uppercase
}

.card .forms {
    padding: 15px
}

.card .inputs {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px
}
.card .inputs span {
    font-size: 12px
}

.card .inputs input {
    height: 40px;
    padding: 0px 10px;
    font-size: 17px;
    box-shadow: none;
    outline: none
}

.card .inputs input[type="text"][readonly] {
    border: 2px solid rgba(0, 0, 0, 0)
}
  </style>
 
<body>
<?php 
    session_start();
    $_SESSION["unique_id"] = $_GET['unique_id'];
    $id = $_GET['unique_id'];

        $conn2 = mysqli_connect("localhost", "root", "","chatapp");
        $sql2 = "SELECT * FROM profile_user Where unique_id = $id";
         $ketqua2 = mysqli_query($conn2,$sql2);
      
        $thongtin=mysqli_fetch_array($ketqua2);
        ?>
 


<div class="container" style="text-align: center;">
    <div class="card">
        <div class="info"> <span>Edit form</span></div>  
        <form action="update_profile.php" method="POST"> 
            <div class="inputs"> <span>Ngày sinh</span> <input type="text" name="birth_day" value="<?php echo $thongtin['birth_day'] ?>"> </div>
            <div class="inputs"> <span>Địa chỉ</span> <input type="text" name="address" value="<?php echo $thongtin['address'] ?>"> </div>
            <div class="inputs"> <span>Email</span> <input type="text" name="email" value="<?php echo $thongtin['email'] ?>"> </div>
            <div class="inputs"> <span>Thẻ căn cước</span> <input type="text" name="ID_card"  value="<?php echo $thongtin['ID_card'] ?>"> </div>
            <div class="inputs"> <span>số điện thoại</span> <input type="text" name="phone_number" value="<?php echo $thongtin['phone_number'] ?>"> </div>
            <div class="inputs"> <span>Giới tính</span> <input type="text" name="sex" value="<?php echo $thongtin['sex'] ?>"> </div>
            <input type="hidden" name="unique_id" value="<?php echo $thongtin['unique_id'] ?>">
          <input style="text-align: center;"  type="submit" name="sua thong tin">  
  </form>
    </div>
        </div>
 

   

  

</body>
</html>