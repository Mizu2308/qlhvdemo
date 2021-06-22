

<?php
	$link = new mysqli('localhost','root','','sinhvien') or die('kết nối thất bại '); 
	mysqli_query($link, 'SET NAMES UTF8');
						
	if(isset($_GET['id'])){
	$hoten = $_GET['id'];
	$hotenSV = $_GET['ten'];
	$ngaySinh = $_GET['ngaysinh'];
	$lopID = $_GET['lop'];
	$sDt = $_GET['sdt'];
	$queQuan = $_GET['quequan'];
	$query = "INSERT INTO `sinhvien`( `name`, `lopID`,`birthday`, `phonenumber`, `address`) VALUES('$hotenSV','$lopID','$ngaySinh','$sDt','$queQuan')";
	$query = 'DELETE FROM `sinhvien` WHERE sinhvienID = "'.$_GET['id'].'"' ;
	mysqli_query($link,$query) or die("xóa dữ liệu thất bại");
    header('location:../sinhvien.php');
						}
?>
				