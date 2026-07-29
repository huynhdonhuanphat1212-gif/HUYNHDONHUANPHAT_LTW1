1. Mục đích của Function trong PHP
- Dùng để gom nhóm một đoạn code xử lý một công việc cụ thể.
- Giúp tái sử dụng code nhiều lần (gọi lại hàm thay vì viết lại code), làm cho source code ngắn gọn và dễ bảo trì hơn.

Ví dụ:
function sayHello() {
    echo "Xin chào!";
}
sayHello();


2. Các Function đã sử dụng trong bài thực hành
- Hàm tự định nghĩa: showProductTable() (trong file common.php).
- Hàm tích hợp sẵn của PHP (Built-in): date(), round().


3. Các loại Function trong PHP
- Built-in functions: Các hàm có sẵn của PHP (như strlen, date).
- User-defined functions: Hàm do lập trình viên tự viết.
- Anonymous functions: Hàm ẩn danh (không có tên).
- Arrow functions: Hàm mũi tên (viết tắt, từ PHP 7.4).


4. Các loại function chưa được áp dụng trong bài
- Hàm ẩn danh (Anonymous functions).
- Hàm mũi tên (Arrow functions).

Ví dụ hàm ẩn danh:
$greet = function($name) {
    return "Hello " . $name;
};

Ví dụ hàm mũi tên:
$add = fn($a, $b) => $a + $b;


5. Tìm hiểu về Parameters (tham số) trong Function

a. Có những dạng tham số nào?
- Tham số bắt buộc (Required parameters).
- Tham số mặc định (Default parameters).
- Tham số tham chiếu (Passed by reference - dùng dấu &).
- Tham số số lượng tùy ý (Variadic parameters - dùng dấu ...).
- Tham số định danh (Named arguments).

b. Bài thực hành đã sử dụng những dạng nào?
- Tham số bắt buộc (được dùng nhiều trong hàm tạo Constructor của class Student).
- Tham số mặc định (được dùng trong hàm showProductTable để cấu hình tiền tệ hoặc số thập phân).

Ví dụ tham số mặc định:
function formatPrice($price, $currency = "VND") {
    return $price . " " . $currency;
}

c. Những dạng tham số nào chưa được áp dụng?
- Tham số tham chiếu.
- Tham số số lượng tùy ý.
- Tham số định danh.

Ví dụ tham chiếu (đổi giá trị biến gốc):
function tangGiaTri(&$so) {
    $so++;
}

Ví dụ số lượng tùy ý:
function tinhTong(...$numbers) {
    return array_sum($numbers);
}