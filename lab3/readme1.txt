KẾT QUẢ TEST CÁC LỆNH NHÚNG FILE TRONG PHP

1. Lệnh include:
- Kết quả: Khi nhúng file không tồn tại, hệ thống văng ra lỗi Warning, tuy nhiên các đoạn mã phía dưới lệnh include vẫn tiếp tục được thực thi.
- Ảnh minh chứng: assets/images/test_include.png

2. Lệnh require:
- Kết quả: Khi nhúng file không tồn tại, hệ thống văng ra lỗi Fatal Error (lỗi nghiêm trọng) và toàn bộ chương trình lập tức dừng lại, mã phía dưới không được thực thi.
- Ảnh minh chứng: assets/images/test_require.png

3. Lệnh include_once / require_once:
- Kết quả: Khi gọi nhúng cùng một file nhiều lần (cố tình lặp lại lệnh), chương trình chỉ thực hiện nhúng file đó đúng 1 lần đầu tiên. Các lệnh gọi lại file đó sau đó sẽ bị bỏ qua. Điều này giúp ngăn chặn lỗi khai báo lại hàm/biến (redeclare) nếu trong file nhúng có chứa hàm.
- Ảnh minh chứng: assets/images/test_require và assets/images/test_include và assets/images/test_requiretest_include_once.png

* Kết luận chung: 
- Dùng 'require' khi file đó bắt buộc phải có để trang web hoạt động (vd: file kết nối database, file cấu hình).
- Dùng 'include' khi file đó chỉ chứa thành phần phụ, nếu thiếu website vẫn chạy được phần còn lại (vd: file banner quảng cáo, footer).
- Nên ưu tiên dùng các lệnh có hậu tố '_once' (require_once) khi nhúng các file chứa khai báo hàm (functions) hoặc class để đảm bảo an toàn.