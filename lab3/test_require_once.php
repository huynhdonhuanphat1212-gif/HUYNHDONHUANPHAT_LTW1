<?php
echo "<h3>1. Test gọi require_once nhiều lần với file TỒN TẠI:</h3>";

// Lần 1: Nhúng file tồn tại
require_once "test_file.php";

// Lần 2: Cố tình gọi lại chính file đó
require_once "test_file.php";

echo "<p><i>Kết luận: Dù gọi 2 lệnh require_once, nhưng dòng chữ màu xanh chỉ xuất hiện 1 lần.</i></p>";

echo "<hr>";

echo "<h3>2. Test require_once với file KHÔNG TỒN TẠI:</h3>";
// Gọi một file cố tình viết sai tên để tạo lỗi
require_once "file_bi_loi_khong_co_that.php";

echo "<h4>Nếu bạn thấy dòng chữ này, nghĩa là chương trình KHÔNG bị dừng (Nhưng thực tế là không thấy đâu).</h4>";
?>