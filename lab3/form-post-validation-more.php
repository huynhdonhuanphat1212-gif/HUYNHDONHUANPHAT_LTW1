<?php
require "includes/header.php";
?>

<main class="container my-5">
    <section class="mb-5 shadow p-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">Thông tin chi tiết</h2>
        
        <!-- Bắt buộc thêm enctype="multipart/form-data" để upload file -->
        <form action="form-post-validation-more.php" method="post" enctype="multipart/form-data">
            
            <!-- Họ tên -->
            <div class="mb-3">
                <label for="fullname" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ tên">
            </div>

            <!-- Tuổi -->
            <div class="mb-3">
                <label for="birthyear" class="form-label">Tuổi</label>
                <input type="text" class="form-control" id="birthyear" name="birthyear" placeholder="Tuổi">
            </div>
            
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>

            <!-- Giới tính -->
            <div class="mb-3">
                <label class="form-label d-block">Giới tính: </label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender1" name="gender" value="1">
                    <label class="form-check-label" for="gender1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender2" name="gender" value="2">
                    <label class="form-check-label" for="gender2">Nữ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender3" name="gender" value="3">
                    <label class="form-check-label" for="gender3">Khác</label>
                </div>
            </div>

            <!-- Lớp -->
            <div class="mb-3">
                <label for="mclass" class="form-label">Lớp</label>
                <select name="mclass" id="mclass" class="form-select">
                    <option value="">-- Chọn lớp --</option>
                    <option value="C1">Lớp C25A</option>
                    <option value="C2">Lớp C25E</option>
                    <option value="C3">Lớp C25F</option>
                </select>
            </div>

            <!-- Sở thích (Checkbox) -->
            <div class="mb-3">
                <label class="form-label d-block">Sở thích: </label>
                <!-- Dùng name="hobbies[]" để PHP nhận dữ liệu dưới dạng mảng -->
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby1" name="hobbies[]" value="Đọc sách">
                    <label class="form-check-label" for="hobby1">Đọc sách</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby2" name="hobbies[]" value="Chơi thể thao">
                    <label class="form-check-label" for="hobby2">Chơi thể thao</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby3" name="hobbies[]" value="Nghe nhạc">
                    <label class="form-check-label" for="hobby3">Nghe nhạc</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby4" name="hobbies[]" value="Du lịch">
                    <label class="form-check-label" for="hobby4">Du lịch</label>
                </div>
            </div>

            <!-- Địa chỉ -->
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Nhập địa chỉ..."></textarea>
            </div>

            <!-- Ngày sinh -->
            <div class="mb-3">
                <label for="dob" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>

            <!-- Ảnh đại diện -->
            <div class="mb-3">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn btn-primary px-4">Gửi</button>
                <button type="reset" class="btn btn-secondary px-4">Làm lại</button>
            </div>
        </form>

        <?php
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Lấy dữ liệu
            $fullname = trim($_POST['fullname'] ?? '');
            $birthyear = trim($_POST['birthyear'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $gender = $_POST['gender'] ?? '';
            $mclass = trim($_POST['mclass'] ?? '');
            $hobbies = $_POST['hobbies'] ?? []; // Mảng sở thích
            $address = trim($_POST['address'] ?? '');
            $dob = trim($_POST['dob'] ?? '');

            // ==== KIỂM TRA DỮ LIỆU ====
            
            // 1. Họ tên
            if (empty($fullname)) {
                $errors[] = "Họ tên không được để trống.";
            } else if (mb_strlen($fullname) < 5) {
                $errors[] = "Họ tên phải có ít nhất 5 ký tự.";
            }

            // 2. Tuổi
            if (empty($birthyear) || !is_numeric($birthyear) || $birthyear < 18 || $birthyear > 60) {
                $errors[] = "Tuổi phải là số và nằm trong khoảng từ 18 đến 60.";
            }

            // 3. Email
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email không được để trống và phải đúng định dạng.";
            }

            // 4. Giới tính
            if (empty($gender)) {
                $errors[] = "Giới tính bắt buộc chọn.";
            }

            // 5. Lớp
            if (empty($mclass)) {
                $errors[] = "Lớp bắt buộc chọn.";
            }

            // 6. Sở thích
            if (empty($hobbies)) {
                $errors[] = "Chọn ít nhất một sở thích.";
            }

            // 7. Địa chỉ
            if (empty($address)) {
                $errors[] = "Địa chỉ không được để trống.";
            }

            // 8. Ngày sinh
            if (empty($dob)) {
                $errors[] = "Ngày sinh không được để trống.";
            }

            // 9. Ảnh đại diện (File)
            if (empty($_FILES['avatar']['name'])) {
                $errors[] = "Ảnh đại diện bắt buộc chọn.";
            } else {
                $file_name = $_FILES['avatar']['name'];
                $file_size = $_FILES['avatar']['size']; // Kích thước (byte)
                
                // Lấy phần mở rộng của file
                $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

                // Kiểm tra định dạng
                if (!in_array($ext, $allowed_ext)) {
                    $errors[] = "Chỉ chấp nhận các định dạng ảnh: jpg, jpeg, png, gif, webp.";
                }
                
                // Kiểm tra dung lượng (200KB = 200 * 1024 bytes)
                if ($file_size > (200 * 1024)) {
                    $errors[] = "Kích thước ảnh không được vượt quá 200KB.";
                }
            }

            // ==== HIỂN THỊ KẾT QUẢ HOẶC LỖI ====
            if (count($errors) > 0) {
                // Hiển thị lỗi
                echo '<div class="alert alert-danger mt-4"><ul class="mb-0">';
                foreach ($errors as $err) {
                    echo "<li>$err</li>";
                }
                echo '</ul></div>';
            } else {
                // Xử lý dữ liệu hiển thị
                $genderText = ($gender == "1") ? "Nam" : (($gender == "2") ? "Nữ" : "Khác");
                
                // Chuyển mảng sở thích thành chuỗi cách nhau bởi dấu phẩy
                $hobbies_str = implode(", ", $hobbies);

                // Lấy tên file ảnh đã chọn để hiển thị thông tin
                $avatar_name = $_FILES['avatar']['name'];
                ?>
                
                <div class="card mt-5 border-success">
                    <div class="card-header bg-success text-white">
                        Thông tin đăng ký hợp lệ
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tr><th width="30%">Họ và tên</th><td><?= htmlspecialchars($fullname) ?></td></tr>
                            <tr><th>Tuổi</th><td><?= htmlspecialchars($birthyear) ?></td></tr>
                            <tr><th>Email</th><td><?= htmlspecialchars($email) ?></td></tr>
                            <tr><th>Giới tính</th><td><?= $genderText ?></td></tr>
                            <tr><th>Lớp</th><td><?= htmlspecialchars($mclass) ?></td></tr>
                            <tr><th>Sở thích</th><td><?= htmlspecialchars($hobbies_str) ?></td></tr>
                            <tr><th>Địa chỉ</th><td><?= nl2br(htmlspecialchars($address)) ?></td></tr>
                            <tr><th>Ngày sinh</th><td><?= htmlspecialchars($dob) ?></td></tr>
                            <tr><th>File Ảnh đại diện</th><td><?= htmlspecialchars($avatar_name) ?> <em>(Chưa Upload lên Server)</em></td></tr>
                        </table>
                    </div>
                </div>

                <?php
            }
        }
        ?>
    </section>
</main>

<?php
require "includes/footer.php";
?>