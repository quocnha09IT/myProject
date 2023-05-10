<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <?php
        date_default_timezone_set ( "Asia/Kolkata" );  
        $h = date ( 'G' );

        if($h >= 5 && $h <= 11 )
        {
            echo  "<h1>Chào buổi sáng Admin</h1>" ;
        }
        elseif ( $h >= 12 && $h <= 15 )
        {
            echo  "<h1>Chào buổi chiều Admin</h1>" ;
        }
        else
        {
            echo  "<h1>Chào buổi tối Admin</h1>" ;
        }
    ?>  
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Tài Khoản</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
        <?php 
        $conn = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "SELECT * FROM users ";
        $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($ketqua);
        echo '<h4>Admin và user : '.$row.'</h4>';
        ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Tin được đăng</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
        <?php 
        $conn = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "SELECT * FROM dangtin ";
        $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($ketqua);
        echo '<h4>Tin : '.$row.'</h4>';
        ?>                                        
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nhà trọ
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
        <?php 
        $conn = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "SELECT * FROM detail_motel ";
        $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($ketqua);
        echo '<h4>Nhà trọ : '.$row.'</h4>';
        ?>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Câu hỏi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
        <?php 
        $conn = mysqli_connect("localhost", "root", "", "chatapp");
        $sql = "SELECT * FROM question ";
        $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($ketqua);
        echo '<h4>Câu hỏi : '.$row.'</h4>';
        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php
        $countvisit = 1 ;

        if(isset($_COOKIE['countvisit']))
        {
            $countvisit = $_COOKIE['countvisit'];
            $countvisit ++;
        }
               
        echo  "Bạn đã đến thăm" . $countvisit . "lần" ;
    ?>

                    <!-- Content Row -->
<!--  -->
