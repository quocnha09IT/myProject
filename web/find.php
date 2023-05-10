<html>
    <head>
        <title>Demo Search Basic by freetuts.net</title>
    </head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <body>
        <div align="center">
            
        </div>
        <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "SELECT * FROM motel WHERE khuvuc LIKE '%$search%'";
 
                // Kết nối sql
                $conn =  mysqli_connect("localhost", "root", "", "chatapp");
 
                // Thực thi câu truy vấn
                $sql = mysqli_query($conn,$query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                 
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    
                    while ($row = mysqli_fetch_assoc($sql)) {
                      echo '<div style="width: 18rem;">';
                      echo "<img src='img/$row[img]' class='card-img-top'>";
                                                
                          echo '<h5 class="card-title">'.$row["name"].'</h5>';
                          echo '<p class="card-text">'.$row["khuvuc"].'</p>';
                            
                    
                        echo '</div>';
                    }
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?> 
       
    </body>
</html>