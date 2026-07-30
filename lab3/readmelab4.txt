Khi thực hiện lấy dữ liệu bằng biến $_GET['fullname'] ,Kết quả sau khi chạy chương trình:URl http://localhost/HuynhDoNhuanPhat_LTW1/lab3/form-get.php?fullname=nguyen+van+a&birthyear=19&gender=1&mclass=C2
biến $fullname sẽ chứa đúng chuỗi văn bản mà người dùng đã nhập vào trường "Họ tên" (Textbox) trên Form.
Khi thực hiện lấy dữ liệu bằng biến $_POST['fullname'] thanh URL của trình duyệt:http://localhost/.../form-post.php không hề có các chuỗi ?fullname=...&birthyear=... nối đuôi theo sau
Sự khác nhau giữa phương thức GET và POST:
Phương thức GET:Dữ liệu được đính kèm vào cuối URL (sau dấu ?),dưới dạng các cặp key=value,Có. Mọi dữ liệu được gửi đi đều có thể nhìn thấy trực tiếp trên thanh địa chỉ URL,Dùng để truy xuất, lấy dữ liệu, tìm kiếm, lọc
Phương thức POST:Dữ liệu được đóng gói ngầm bên trong,Không. Dữ liệu được gửi ngầm và hoàn toàn không hiển thị trên URL,Dùng để gửi dữ liệu lên server xử lý,thêm mới, cập nhật dữ liệu, upload