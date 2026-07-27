<?php
// ==========================================
echo "<h3>=========================1. Các phép toán cơ bản==========================</h3>";
$a = 15;
$b = 4;
echo "Số a = $a, Số b = $b <br>";
echo "Cộng (a + b) = " . ($a + $b) . "<br>";
echo "Trừ (a - b) = " . ($a - $b) . "<br>";
echo "Nhân (a * b) = " . ($a * $b) . "<br>";
echo "Chia (a / b) = " . ($a / $b) . "<br>";
echo "Chia lấy dư (a % b) = " . ($a % $b) . "<br>";

// ==========================================

echo "<h3>==================2. So sánh nguyên và chuỗi số========================</h3>";
$soNguyen = 5;
$chuoiSo = "5";

echo "Biến \$soNguyen = $soNguyen (int), \$chuoiSo = \"$chuoiSo\" (string) <br>";
echo "\$soNguyen == \$chuoiSo : "; var_dump($soNguyen == $chuoiSo); echo "<br>";
echo "\$soNguyen === \$chuoiSo : "; var_dump($soNguyen === $chuoiSo); echo "<br>";
echo "\$soNguyen != \$chuoiSo : "; var_dump($soNguyen != $chuoiSo); echo "<br>";
echo "\$soNguyen <> \$chuoiSo : "; var_dump($soNguyen <> $chuoiSo); echo "<br>";
echo "\$soNguyen !== \$chuoiSo : "; var_dump($soNguyen !== $chuoiSo); echo "<br>";


// ==========================================
echo "<h3>===============3. Phép tăng trước và tăng sau============================</h3>";
$x = 10;
echo "Giá trị ban đầu của x = $x <br>";
echo "Thực hiện phép tăng trước (++\$x): " . (++$x) . "<br>";
echo "Giá trị sau cùng của x: $x <br><br>";

$y = 10;
echo "Giá trị ban đầu của y = $y <br>";
echo "Thực hiện phép tăng sau (\$y++): " . ($y++) . "<br>";
echo "Giá trị sau cùng của y: $y <br>";

// ==========================================
echo "<h3>======================4. Toán tử nối chuỗi=======================</h3>";
$str1 = "Lập trình ";
$str2 = "PHP & MySQL";

$noiChuoi1 = $str1 . $str2;
echo "Sử dụng toán tử (.) tạo biến mới: " . $noiChuoi1 . "<br>";


$str1 .= $str2;
echo "Sử dụng toán tử (.=) cập nhật biến gốc: " . $str1 . "<br>";

// ==========================================
echo "<h3>==================5. Đếm số lượng ký tự=======================</h3>";
$chuoiKhongDau = "Hello World";
$chuoiCoDau = "Xin chào Thế giới";

echo "Đếm bằng strlen() - chuỗi '$chuoiKhongDau': " . strlen($chuoiKhongDau) . "<br>";
echo "Đếm bằng mb_strlen() - chuỗi '$chuoiCoDau': " . mb_strlen($chuoiCoDau) . "<br>";

// ==========================================
echo "<h3>===============6. Chuyển đổi chữ hoa và chữ thường===================</h3>";
$strDoiChu = "Hoc PHP Co Ban";
echo "Chuỗi ban đầu: " . $strDoiChu . "<br>";
echo "Chữ in hoa (strtoupper): " . strtoupper($strDoiChu) . "<br>";
echo "Chữ thường (strtolower): " . strtolower($strDoiChu) . "<br>";

// ==========================================
echo "<h3>=============7. Ép kiểu chuỗi về kiểu số nguyên========================</h3>";
$strNum1 = "123 abc";
$strNum2 = "abc 123";

$int1 = (int)$strNum1;
$int2 = (int)$strNum2;

echo "Chuỗi '123 abc' ép về int: "; var_dump($int1); echo "<br>";
echo "Chuỗi 'abc 123' ép về int: "; var_dump($int2); echo "<br>";



// ==========================================
echo "<h3>===============8. Hiển thị kiểu dữ liệu bằng var_dump()===============</h3>";
$varInt = 2026;
$varFloat = 3.1415;
$varString = "Thực hành Web";
$varBool = true;

var_dump($varInt); echo "<br>";
var_dump($varFloat); echo "<br>";
var_dump($varString); echo "<br>";
var_dump($varBool); echo "<br>";

?>