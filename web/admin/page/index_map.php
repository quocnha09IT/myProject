<!DOCTYPE html>
<html>
<head>
	<title>Quản lí nhà trọ</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>
</head>
<body>
	<button><a href="../index.php?page=0" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">trang chủ</a></button>
	<div class="container">
		<center><h1>Địa chỉ nhà trọ trên Google Maps </h1></center>
		<?php 
			require 'education.php';
			$edu = new detail_motel;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
	</div>
	<!-- <p><a href="page/index?page=0" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">trang chủ</a></p> -->

</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-7X5OL0hhhxO32P9rZ5nzOciOcGRgXGc&callback=loadMap">
</script>
</html>