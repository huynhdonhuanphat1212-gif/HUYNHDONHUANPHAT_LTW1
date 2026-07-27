<?php
// ==========================================
echo "<h3>============1. Sử dụng trim()==========================</h3>";
$chuoiTrim = "   Khoảng trắng ở hai đầu   ";

echo "Chuỗi ban đầu: "; 
var_dump($chuoiTrim);
echo "<br>";

$ketQuaTrim = trim($chuoiTrim);
echo "Sau khi dùng trim(): "; 
var_dump($ketQuaTrim); 
echo "<br>";

// ==========================================
echo "<h3>=============2. Loại bỏ khoảng trắng bên trái và bên phải==============</h3>";
$chuoiLeftRight = "   Học lập trình Web   ";

echo "Chuỗi ban đầu: "; 
var_dump($chuoiLeftRight); 
echo "<br>";

$ketQuaLtrim = ltrim($chuoiLeftRight);
echo "Sử dụng ltrim() (Xóa bên trái): "; 
var_dump($ketQuaLtrim); 
echo "<br>";

$ketQuaRtrim = rtrim($chuoiLeftRight);
echo "Sử dụng rtrim() (Xóa bên phải): "; 
var_dump($ketQuaRtrim); 
echo "<br>";

// ==========================================
echo "<h3>================3. Cắt chuỗi (substr)========================</h3>";
$chuoiSubstr = "Day la mot chuoi van ban dai hon 30 ky tu de test."; 

echo "Chuỗi gốc: " . $chuoiSubstr . "<br>";

$muoiKyTuDau = substr($chuoiSubstr, 0, 10);
echo "10 ký tự đầu tiên: " . $muoiKyTuDau . "<br>";

$tuKyTuThu5 = substr($chuoiSubstr, 5);
echo "Từ ký tự thứ 5 đến hết chuỗi: " . $tuKyTuThu5 . "<br>";

// ==========================================
echo "<h3>=====================4. Thay thế chuỗi (str_replace)====================</h3>";
$chuoiReplace = "Sinh vien thuong su dung ngon ngu Python de lam Web.";

echo "Chuỗi gốc: " . $chuoiReplace . "<br>";

$chuoiMoi = str_replace("Python", "PHP", $chuoiReplace);

echo "Chuỗi sau khi thay thế: " . $chuoiMoi . "<br>";

?>