<?php
$conn=mysqli_connect("localhost","root","","ql_sinhvien");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change character set to utf8
mysqli_set_charset($conn,"utf8");
$url = "http://localhost/sms/ql_sinhvien/";
error_reporting(0);
?>