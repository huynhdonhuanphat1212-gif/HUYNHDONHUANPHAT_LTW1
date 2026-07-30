<?php
require "includes/header.php";

// 1. Tạo mảng dữ liệu mô phỏng gồm 20 sinh viên
$students = [
    ["name" => "Nguyễn Văn An", "age" => 20, "gender" => "Nam", "class" => "C25A", "email" => "an.nguyen@gmail.com"],
    ["name" => "Trần Thị Bình", "age" => 19, "gender" => "Nữ", "class" => "C25E", "email" => "binh.tran@gmail.com"],
    ["name" => "Lê Hoàng Cường", "age" => 21, "gender" => "Nam", "class" => "C25F", "email" => "cuong.le@gmail.com"],
    ["name" => "Phạm Dung Dung", "age" => 20, "gender" => "Nữ", "class" => "C25A", "email" => "dung.pham@gmail.com"],
    ["name" => "Hoàng Thanh Em", "age" => 22, "gender" => "Nam", "class" => "C25E", "email" => "em.hoang@gmail.com"],
    ["name" => "Ngô Bá Khá", "age" => 19, "gender" => "Nam", "class" => "C25F", "email" => "kha.ngo@gmail.com"],
    ["name" => "Vũ Bích Ngọc", "age" => 20, "gender" => "Nữ", "class" => "C25A", "email" => "ngoc.vu@gmail.com"],
    ["name" => "Đặng Văn Hùng", "age" => 21, "gender" => "Nam", "class" => "C25E", "email" => "hung.dang@gmail.com"],
    ["name" => "Bùi Thị Yến", "age" => 20, "gender" => "Nữ", "class" => "C25F", "email" => "yen.bui@gmail.com"],
    ["name" => "Đỗ Xuân Trường", "age" => 19, "gender" => "Nam", "class" => "C25A", "email" => "truong.do@gmail.com"],
    ["name" => "Hồ Ngọc Hà", "age" => 21, "gender" => "Nữ", "class" => "C25E", "email" => "ha.ho@gmail.com"],
    ["name" => "Dương Tấn Tài", "age" => 22, "gender" => "Nam", "class" => "C25F", "email" => "tai.duong@gmail.com"],
    ["name" => "Lý Mạc Sầu", "age" => 18, "gender" => "Nữ", "class" => "C25A", "email" => "sau.ly@gmail.com"],
    ["name" => "Tô Bửu Đảo", "age" => 20, "gender" => "Nam", "class" => "C25E", "email" => "dao.to@gmail.com"],
    ["name" => "Đinh Lệ Giang", "age" => 19, "gender" => "Nữ", "class" => "C25F", "email" => "giang.dinh@gmail.com"],
    ["name" => "Phan Văn Trị", "age" => 21, "gender" => "Nam", "class" => "C25A", "email" => "tri.phan@gmail.com"],
    ["name" => "Trương Mỹ Lan", "age" => 20, "gender" => "Nữ", "class" => "C25E", "email" => "lan.truong@gmail.com"],
    ["name" => "Cao Bá Quát", "age" => 22, "gender" => "Nam", "class" => "C25F", "email" => "quat.cao@gmail.com"],
    ["name" => "Đào Hồng Gấm", "age" => 19, "gender" => "Nữ", "class" => "C25A", "email" => "gam.dao@gmail.com"],
    ["name" => "Lại Văn Sâm", "age" => 20, "gender" => "Nam", "class" => "C25E", "email" => "sam.lai@gmail.com"]
];

$search_name = isset($_GET['search_name']) ? trim($_GET['search_name']) : '';
$search_gender = isset($_GET['search_gender']) ? $_GET['search_gender'] : '';
$search_class = isset($_GET['search_class']) ? $_GET['search_class'] : '';

$results = [];
$is_searched = isset($_GET['search_name']);

if ($is_searched) {
    foreach ($students as $student) {
        $match_name = empty($search_name) || stripos($student['name'], $search_name) !== false;
        
        $match_gender = empty($search_gender) || $student['gender'] === $search_gender;
        
        $match_class = empty($search_class) || $student['class'] === $search_class;

        if ($match_name && $match_gender && $match_class) {
            $results[] = $student;
        }
    }
} else {
    $results = $students;
}
?>

<main class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Tìm kiếm sinh viên</h5>
                </div>
                <div class="card-body">
                    <form action="student-search.php" method="GET">
                        <div class="mb-3">
                            <label for="search_name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="search_name" name="search_name" value="<?= htmlspecialchars($search_name) ?>" placeholder="Nhập tên cần tìm...">
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Giới tính</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="gender_all" name="search_gender" value="" <?= $search_gender == '' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="gender_all">Tất cả</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="gender_male" name="search_gender" value="Nam" <?= $search_gender == 'Nam' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="gender_male">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="gender_female" name="search_gender" value="Nữ" <?= $search_gender == 'Nữ' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="gender_female">Nữ</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="search_class" class="form-label">Lớp</label>
                            <select name="search_class" id="search_class" class="form-select">
                                <option value="">-- Tất cả các lớp --</option>
                                <option value="C25A" <?= $search_class == 'C25A' ? 'selected' : '' ?>>Lớp C25A</option>
                                <option value="C25E" <?= $search_class == 'C25E' ? 'selected' : '' ?>>Lớp C25E</option>
                                <option value="C25F" <?= $search_class == 'C25F' ? 'selected' : '' ?>>Lớp C25F</option>
                            </select>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            <a href="student-search.php" class="btn btn-outline-secondary">Làm lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <h4 class="mb-3">Danh sách sinh viên</h4>
            
            <?php if ($is_searched && count($results) === 0): ?>
                <div class="alert alert-warning" role="alert">
                    Không tìm thấy sinh viên phù hợp.
                </div>
            <?php else: ?>
                <div class="table-responsive shadow-sm">
                    <table class="table table-bordered table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>STT</th>
                                <th>Họ và tên</th>
                                <th>Tuổi</th>
                                <th>Giới tính</th>
                                <th>Lớp</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $stt = 1;
                            foreach ($results as $sv): 
                            ?>
                                <tr>
                                    <td><?= $stt++ ?></td>
                                    <td><?= htmlspecialchars($sv['name']) ?></td>
                                    <td><?= htmlspecialchars($sv['age']) ?></td>
                                    <td><?= htmlspecialchars($sv['gender']) ?></td>
                                    <td>
                                        <span class="badge bg-info text-dark"><?= htmlspecialchars($sv['class']) ?></span>
                                    </td>
                                    <td><?= htmlspecialchars($sv['email']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="mt-2 text-muted text-end">
                    <em>Tìm thấy <?= count($results) ?> sinh viên.</em>
                </div>
            <?php endif; ?>

        </div>
    </div>
</main>

<?php
require "includes/footer.php";
?>