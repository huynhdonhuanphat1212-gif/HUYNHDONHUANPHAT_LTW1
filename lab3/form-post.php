<?php
require "includes/header.php";
?>

<main class="container my-5">
    <section class="mb-5 shadow p-3 mx-auto" style="width: 500px;">
        <h2>Thông tin</h2>
        
        <!-- Form sử dụng method="post" -->
        <form action="form-post.php" method="post">
            <div class="mb-3 mt-3">
                <label for="fullname">Họ tên</label>
                <!-- Lưu ý: Bỏ thuộc tính required ở HTML để test Validation phía Server bằng PHP -->
                <input type="text" class="form-control" id="fullname" placeholder="Họ tên" name="fullname">
            </div>

            <div class="mb-3 mt-3">
                <label for="birthyear">Tuổi</label>
                <input type="text" class="form-control" id="birthyear" placeholder="Tuổi" name="birthyear">
            </div>
            
            <!-- Bổ sung thêm trường Email theo yêu cầu kiểm tra -->
            <div class="mb-3 mt-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
            </div>

            <div class="mb-3 mt-3">
                <label for="">Giới tính: </label>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender1" name="gender" value="1">
                    <label class="form-check-label" for="gender1">Nam</label>
                </div>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender2" name="gender" value="2">
                    <label class="form-check-label" for="gender2">Nữ</label>
                </div>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender3" name="gender" value="3">
                    <label class="form-check-label" for="gender3">Khác</label>
                </div>
            </div>

            <div class="mb-3 mt-3">
                <label for="mclass">Lớp</label>
                <select name="mclass" id="mclass" class="form-control">
                    <option value="">-- Chọn lớp --</option>
                    <option value="C1">Lớp C25A</option>
                    <option value="C2">Lớp C25E</option>
                    <option value="C3">Lớp C25F</option>
                </select>
            </div>

            <div class="d-flex justify-content-center gap-3">
                <button type="submit" class="btn btn-primary">Gửi</button>
                <button type="reset" class="btn btn-primary">Làm lại</button>
            </div>
        </form>

        <?php
        // Khởi tạo mảng lưu thông báo lỗi
        $errors = [];

        // Kiểm tra xem Form có đang được gửi bằng phương thức POST hay không
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Lấy dữ liệu từ form và loại bỏ khoảng trắng thừa bằng trim()
            $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
            $birthyear = isset($_POST['birthyear']) ? trim($_POST['birthyear']) : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            $mclass = isset($_POST['mclass']) ? trim($_POST['mclass']) : '';

            // ==== KIỂM TRA DỮ LIỆU ĐẦU VÀO (VALIDATION) ====

            // 1. Kiểm tra Họ tên
            if (empty($fullname)) {
                $errors[] = "Họ và tên không được để trống.";
            } else if (mb_strlen($fullname) < 5) {
                $errors[] = "Họ và tên phải có ít nhất 05 ký tự.";
            }

            // 2. Kiểm tra Tuổi
            if (empty($birthyear)) {
                $errors[] = "Tuổi không được để trống.";
            } else if (!is_numeric($birthyear)) {
                $errors[] = "Tuổi phải là số.";
            } else if ($birthyear < 18 || $birthyear > 60) {
                $errors[] = "Tuổi phải nằm trong khoảng từ 18 đến 60.";
            }

            // 3. Kiểm tra Email
            if (empty($email)) {
                $errors[] = "Email không được để trống.";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email không đúng định dạng.";
            }

            // 4. Kiểm tra Giới tính
            if (empty($gender)) {
                $errors[] = "Giới tính bắt buộc chọn.";
            }

            // 5. Kiểm tra Lớp
            if (empty($mclass)) {
                $errors[] = "Lớp bắt buộc chọn.";
            }

            // ==== HIỂN THỊ KẾT QUẢ ====

            // Nếu mảng $errors có dữ liệu (tức là có lỗi)
            if (count($errors) > 0) {
            ?>
                <div class="alert alert-danger mt-4">
                    <ul class="mb-0">
                        <?php
                        foreach ($errors as $error) {
                            echo "<li>$error</li>";
                        }
                        ?>
                    </ul>
                </div>
            <?php
            } else {
                // Nếu mảng $errors rỗng (không có lỗi), hiển thị thông tin
                $genderText = ($gender == "1") ? "Nam" : (($gender == "2") ? "Nữ" : "Khác");
            ?>
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        Thông tin đã nhập
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Họ và tên</th>
                                <td><?= htmlspecialchars($fullname) ?></td>
                            </tr>
                            <tr>
                                <th>Tuổi</th>
                                <td><?= htmlspecialchars($birthyear) ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?= htmlspecialchars($email) ?></td>
                            </tr>
                            <tr>
                                <th>Giới tính</th>
                                <td><?= $genderText ?></td>
                            </tr>
                            <tr>
                                <th>Lớp</th>
                                <td><?= htmlspecialchars($mclass) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
            }
        } // End if POST
        ?>

    </section>
</main>

<?php
require "includes/footer.php";
?>