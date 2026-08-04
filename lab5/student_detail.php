<?php
require_once "dao/StudentDAO.php";

$studentDAO = new StudentDAO();

if (!isset($_GET["id"])) {
    header("Location: student_index.php");
    exit;
}

$id = (int)$_GET["id"];
$student = $studentDAO->getById($id);

require_once "includes/header.php";
?>

<main class="container my-5">
    <section class="mb-5">
        <?php if ($student == null) { ?>
            <div class="alert alert-warning mb-4">
                Không tìm thấy thông tin sinh viên!
            </div>
        <?php } else { ?>
            <h2 class="mb-4">Chi tiết sinh viên</h2>
            <table class="table table-bordered mb-4">
                <tr>
                    <th width="200">Mã sinh viên</th>
                    <td><?= $student->studentCode ?></td>
                </tr>
                <tr>
                    <th>Họ và tên</th>
                    <td><?= $student->fullName ?></td>
                </tr>
                <tr>
                    <th>Số điện thoại</th>
                    <td><?= $student->phone ?></td>
                </tr>
                <tr>
                    <th>Giới tính</th>
                    <td><?= $student->gender ?></td>
                </tr>
            </table>
        <?php } ?>
        
        <a href="student_index.php" class="btn btn-secondary">
            Quay lại
        </a>
    </section>
</main>

<?php
require_once "includes/footer.php";
?>