<?php
require "includes/header.php";
require_once "classes/Student.php";

// 4. Thêm dữ liệu tối thiểu 20 sinh viên
$students = [
    new Student("SV001", "Nguyễn Văn A", "Nam", 2005, 8.5, 9.0, 7.5),
    new Student("SV002", "Trần Thị B", "Nữ", 2004, 9.0, 8.0, 9.5),
    new Student("SV003", "Lê Văn C", "Nam", 2005, 7.5, 8.0, 8.5),
    new Student("SV004", "Phạm Thị D", "Nữ", 2006, 6.5, 7.5, 8.0),
    new Student("SV005", "Hoàng Văn E", "Nam", 2005, 8.0, 8.5, 9.0),
    new Student("SV006", "Vũ Thị F", "Nữ", 2004, 9.5, 9.5, 9.0),
    new Student("SV007", "Đặng Văn G", "Nam", 2005, 5.0, 6.0, 5.5),
    new Student("SV008", "Bùi Thị H", "Nữ", 2006, 7.0, 6.5, 7.5),
    new Student("SV009", "Lý Văn I", "Nam", 2004, 4.5, 5.0, 4.0),
    new Student("SV010", "Ngô Thị K", "Nữ", 2005, 8.5, 8.5, 9.0),
    new Student("SV011", "Đỗ Văn L", "Nam", 2006, 6.0, 7.0, 6.5),
    new Student("SV012", "Hồ Thị M", "Nữ", 2004, 9.0, 9.5, 9.5),
    new Student("SV013", "Dương Văn N", "Nam", 2005, 7.5, 7.5, 7.0),
    new Student("SV014", "Đinh Thị P", "Nữ", 2006, 5.5, 5.0, 6.0),
    new Student("SV015", "Phan Văn Q", "Nam", 2004, 8.0, 8.0, 8.5),
    new Student("SV016", "Trịnh Thị R", "Nữ", 2005, 9.5, 9.0, 10.0),
    new Student("SV017", "Đoàn Văn S", "Nam", 2006, 6.5, 6.0, 7.0),
    new Student("SV018", "Lâm Thị T", "Nữ", 2004, 7.0, 8.5, 8.0),
    new Student("SV019", "Mai Văn U", "Nam", 2005, 4.0, 4.5, 5.0),
    new Student("SV020", "Phùng Thị V", "Nữ", 2006, 8.5, 9.0, 8.5)
];

function countStudents($students) {
    $count = 0;
    foreach ($students as $student) $count++;
    return $count;
}

function countMaleStudents($students) {
    $count = 0;
    foreach ($students as $student) {
        if ($student->gender === "Nam") $count++;
    }
    return $count;
}

function countFemaleStudents($students) {
    $count = 0;
    foreach ($students as $student) {
        if ($student->gender === "Nữ") $count++;
    }
    return $count;
}

function countScholarshipStudents($students) {
    $count = 0;
    foreach ($students as $student) {
        if ($student->getScholarship() === "Có") $count++;
    }
    return $count;
}

function countExcellentStudents($students) {
    $count = 0;
    foreach ($students as $student) {
        if ($student->getRank() === "Xuất sắc") $count++;
    }
    return $count;
}

function getAverageScore($students) {
    if (countStudents($students) === 0) return 0;
    $total = 0;
    foreach ($students as $student) {
        $total += $student->getAverage();
    }
    return round($total / countStudents($students), 2);
}

function getHighestAverage($students) {
    if (countStudents($students) === 0) return 0;
    $max = $students[0]->getAverage();
    foreach ($students as $student) {
        if ($student->getAverage() > $max) {
            $max = $student->getAverage();
        }
    }
    return $max;
}

function getLowestAverage($students) {
    if (countStudents($students) === 0) return 0;
    $min = $students[0]->getAverage();
    foreach ($students as $student) {
        if ($student->getAverage() < $min) {
            $min = $student->getAverage();
        }
    }
    return $min;
}
?>

<!-- main -->
<main class="container my-5">
        <section class="mb-5">
        <h3 class="mb-4 text-center">Dashboard Thống Kê</h3>
        <div class="row g-3 text-center">
            <div class="col-md-3 col-sm-6">
                <div class="card bg-secondary text-white h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Tổng Sinh Viên</h6>
                        <h3 class="card-text"><?= countStudents($students) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card bg-primary text-white h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Sinh Viên Nam / Nữ</h6>
                        <h3 class="card-text"><?= countMaleStudents($students) ?> / <?= countFemaleStudents($students) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card bg-success text-white h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Đạt Học Bổng</h6>
                        <h3 class="card-text"><?= countScholarshipStudents($students) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card bg-info text-dark h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Xếp Loại Xuất Sắc</h6>
                        <h3 class="card-text"><?= countExcellentStudents($students) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card bg-warning text-dark h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Điểm TB Cao Nhất</h6>
                        <h3 class="card-text"><?= getHighestAverage($students) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card bg-danger text-white h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Điểm TB Thấp Nhất</h6>
                        <h3 class="card-text"><?= getLowestAverage($students) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card bg-dark text-white h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Điểm TB Cả Lớp</h6>
                        <h3 class="card-text"><?= getAverageScore($students) ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h3 class="mb-3">Danh sách sinh viên</h3>
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Mã SV</th>
                        <th>Họ tên</th>
                        <th>Giới tính</th>
                        <th>Năm sinh</th>
                        <th>Tuổi</th>
                        <th>HTML</th>
                        <th>CSS</th>
                        <th>PHP</th>
                        <th>Tổng điểm</th>
                        <th>Điểm TB</th>
                        <th>Xếp loại</th>
                        <th>Học bổng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($students as $student) {
                        $student->showInfo();
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php require "includes/footer.php"; ?>