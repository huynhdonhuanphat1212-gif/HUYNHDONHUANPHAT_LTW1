1. Phân biệt MySQL và phpMyAdmin
- MySQL: Là hệ quản trị cơ sở dữ liệu (DBMS) dùng để lưu trữ và quản lý dữ liệu.
- phpMyAdmin: Là một công cụ giao diện nền web giúp thao tác, quản lý MySQL dễ dàng hơn (tạo bảng, query...) bằng các cú click chuột thay vì gõ lệnh dòng lệnh.

2. Các cách kết nối CSDL trong PHP
- MySQLi thủ tục: Sử dụng các hàm rời rạc của PHP (vd: mysqli_connect()).
- MySQLi hướng đối tượng: Đóng gói thành các đối tượng/lớp (vd: $conn = new mysqli()).
- PDO: Hỗ trợ kết nối nhiều loại CSDL khác nhau (MySQL, SQL Server, SQLite...) bằng hướng đối tượng.
-> Trong Lab này, chúng ta đang sử dụng: MySQLi hướng đối tượng (thể hiện qua cú pháp $this->conn->prepare()).

3. Phân biệt Database, Table, Record, Field
- Database (Cơ sở dữ liệu): Là cái kho lớn nhất chứa toàn bộ dữ liệu của dự án.
- Table (Bảng): Nằm trong DB, lưu dữ liệu theo một chủ đề cụ thể (vd: bảng students).
- Record (Bản ghi/Dòng): Là một hàng trong bảng, chứa thông tin của một đối tượng cụ thể (vd: 1 dòng thông tin của 1 sinh viên).
- Field (Trường/Cột): Là thuộc tính của bảng (vd: cột id, cột họ tên, cột giới tính).

4. AUTO_INCREMENT và PRIMARY KEY
- PRIMARY KEY (Khóa chính): Dùng để xác định duy nhất một bản ghi trong bảng (không được trùng, không được rỗng). Giúp phân biệt người này với người khác.
- AUTO_INCREMENT: Lệnh tự động tăng giá trị lên 1 khi có dữ liệu mới được thêm vào. Thường gắn chung với Khóa chính (ID) để lập trình viên không phải tự nhập mã này.

5. Phân biệt GET và POST
- GET: Dữ liệu được đẩy lên URL, ai cũng thấy được, giới hạn độ dài. Thường dùng để lấy/truyền tham số không quan trọng (như id sinh viên khi xem chi tiết/xóa).
- POST: Dữ liệu được gửi ngầm bên trong HTTP request, an toàn hơn, không giới hạn dung lượng. Thường dùng khi submit Form (Thêm/Sửa thông tin).

6. Tại sao cần Validate dữ liệu?
- Để đảm bảo dữ liệu người dùng nhập vào là chính xác (đúng định dạng email, sđt) và không bị bỏ trống. Việc này giúp CSDL không bị lưu rác và tránh lỗi khi thực thi các lệnh SQL.

7. SQL Injection và Prepared Statement
- SQL Injection: Là lỗ hổng bảo mật mà hacker chèn các đoạn mã SQL độc hại vào form nhập liệu nhằm phá hoại, xóa hoặc đánh cắp dữ liệu.
- Sử dụng Prepared Statement (dùng dấu chấm hỏi ? làm tham số): Giúp hệ thống phân tách rõ ràng đâu là "câu lệnh SQL", đâu là "dữ liệu text", từ đó vô hiệu hóa hoàn toàn mã độc nếu người dùng cố tình nhập vào.

8. Tại sao UPDATE/DELETE cần mệnh đề WHERE?
- Mệnh đề WHERE dùng để chỉ định đúng bản ghi (ID) cần thao tác. Nếu quên WHERE, hệ thống sẽ cập nhật hoặc xóa TOÀN BỘ dữ liệu có trong bảng đó, gây hậu quả nghiêm trọng.

9. Export, Import và Backup
- Export: Xuất dữ liệu từ CSDL ra thành file (thường là .sql) để lưu trữ hoặc đem sang máy khác.
- Import: Nhập file dữ liệu (.sql) vào lại CSDL.
- Backup: Sao lưu dự phòng CSDL định kỳ. Nếu hệ thống sập hoặc mất dữ liệu thì có bản backup để khôi phục lại trạng thái cũ.