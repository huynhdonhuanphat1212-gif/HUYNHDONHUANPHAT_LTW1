<?php
echo "<h2>============Bài tập Lab 1 - Câu 1=========================</h2>";

// ------------------------------------------
echo "<h3>=========================1. In thông tin bằng echo==========================</h3>";
echo "Họ tên: Huỳnh Đỗ Nhuận Phát <br>";
echo "Ngày sinh: 01/01/2003 <br>";
echo "Mã số sinh viên: 2123110381 <br>";


// ------------------------------------------
echo "<h3>====================2. Khai báo và sử dụng biến======================</h3>";
$hoTen = "Huỳnh Đỗ Nhuận Phát";
$mssv = "2123110381";
$soDienThoai = "0901234567";
$ngaySinh = "01/01/2003";

echo "Họ tên (từ biến): " . $hoTen . "<br>";
echo "MSSV (từ biến): " . $mssv . "<br>";
echo "Số điện thoại (từ biến): " . $soDienThoai . "<br>";
echo "Ngày sinh (từ biến): " . $ngaySinh . "<br>";


// ------------------------------------------
echo "<h3>========================3. Khai báo hằng số==========================</h3>";
define("HOST", "localhost");
define("DATABASE", "quanly_sinhvien");
define("USERNAME", "root");
define("PASSWORD", "");

echo "Host: " . HOST . "<br>";
echo "Database: " . DATABASE . "<br>";
echo "Username: " . USERNAME . "<br>";
echo "Password: " . PASSWORD . "<br>";


// ------------------------------------------
echo "<h3>============4. Phân biệt nháy đơn và nháy kép==============</h3>";

echo "Dùng nháy kép: Tên của tôi là $hoTen <br>"; 

echo 'Dùng nháy đơn: Tên của tôi là $hoTen <br>'; 

?>