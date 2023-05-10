<?php
session_start(); //khởi tạo session
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//Ket noi co so du lieu
$link=mysqli_connect('localhost','root','','website') or die (mysqli_error());
mysqli_query($link,'set names utf8');
//Start Session


   $timeout=1;// Thoi gian timeout, tinh bang phut
   $id=session_id();//Lay id cua moi phien nguoi dung
   $user=$_SESSION['unique_id'];//lay session để kiểm tra là thành viên hay khách (Dựa vào session của trang đăng nhập, Chỉ cần khi nhúng vào trang web đang làm)
   //Xem id da co trong csdl hay chua
   $sql="select 1 from `user_online` where `id`='$id'";
   $rs=mysqli_query($link,$sql);
   if(mysqli_num_rows($rs)>0)
   {
       //Da co trong CSDL -> Cap nhat lai lastvisit
         $sql="update `user_online` set `lastvisit`=unix_timestamp(),`user`='$user' where `id`='$id'";
         mysqli_query($link,$sql);
   }
   else
   {
       //Chua co trong CSDL -> Thêm vào CSDL
       $sql="insert into `user_online` values ('$id',unix_timestamp(),'$user')";
       mysqli_query($link,$sql);
   }
   //Xoa nhung user da het thoi gian timeout
   $sql="delete from `user_online` where unix_timestamp()-lastvisit > $timeout * 60";
   mysqli_query($link,$sql);

   //Lay so luong nguoi dang online
   $sql="select count(*) from `user_online`";
   $rs=mysqli_query($link,$sql);
   $r=mysqli_fetch_row($rs);
   $cnt=str_pad($r[0],3,'0',STR_PAD_LEFT);
   $songuoionline="";
   for($i=0;$i<strlen($cnt);$i++)
   {
       $digit=substr($cnt,$i,1);
       $songuoionline.="<img src='images/$digit.png' width='16' align='absmiddle' height='21' />";
   }
// Dem so thanh vien
   $sql="select count(*) from `user_online` where `user`!=''";
   $rs=mysqli_query($link,$sql);
   $r=mysqli_fetch_row($rs);
   $cnt=str_pad($r[0],3,'0',STR_PAD_LEFT);
   $sothanhvien="";
   for($i=0;$i<strlen($cnt);$i++)
   {
       $digit=substr($cnt,$i,1);
       $sothanhvien.="<img src='images/$digit.png' width='16' align='absmiddle' height='21' />";
   }

// Dem so khach
   $sql="select count(*) from `user_online` where `user`=''";
   $rs=mysqli_query($link,$sql);
   $r=mysqli_fetch_row($rs);
   $cnt=str_pad($r[0],3,'0',STR_PAD_LEFT);
   $sokhach="";
   for($i=0;$i<strlen($cnt);$i++)
   {
       $digit=substr($cnt,$i,1);
       $sokhach.="<img src='images/$digit.png' width='16' align='absmiddle' height='21' />";
   }

   //Tang so luot truy cap (Mở rộng: Dùng thêm SESSION để 1 phiên truy cập chỉ tăng 1 lần)
   $sql="UPDATE `counter` SET `cnt`=`cnt`+1 ";
   mysqli_query($link,$sql);
   // Dem so luot truy cap
   $sql="SELECT `cnt` from `counter`";
   $rs=mysqli_query($link,$sql);
   $r=mysqli_fetch_assoc($rs);
   $cnt=str_pad($r['cnt'],5,'0',STR_PAD_LEFT);
   $luotruycap="";
   for($i=0;$i<strlen($cnt);$i++)
   {
       $digit=substr($cnt,$i,1);
       $luotruycap=$luotruycap. "<img src='images/$digit.png' width='16' align='absmiddle' height='21' />";
   }

?>
<div class="mycart" style="text-align:right;padding-right:10px">
<div class="small_heading">
  <h5 class="colr">THỐNG KÊ</h5>
</div>
<div style="clear:both"></div>
<?php
  echo "Số lượt truy cập: $luotruycap";
  echo "<br/>Số người online: $songuoionline";
  echo "<br/>Số thành viên: $sothanhvien";
  echo "<br/>Số khách: $sokhach";
?>
</div>