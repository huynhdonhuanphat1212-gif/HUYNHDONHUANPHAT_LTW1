<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";

$studentDAO = new StudentDAO();
$error = "";

if (!isset($_GET["id"])) {
    header("Location: student_index.php");
    exit;
}

$id = (int)$_GET["id"];
$student = $studentDAO->getById($id);

if ($student == null) {
    header("Location: student_index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentCode = trim($_POST["studentCode"]);
    $fullName = trim($_POST["fullName"]);
    $phone = trim($_POST["phone"]);
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

    $student->studentCode = $studentCode;
    $student->fullName = $fullName;
    $student->phone = $phone;
    $student->gender = $gender;

    if (empty($studentCode)) {
        $error = "Mã sinh viên không được để trống.";
    } elseif (empty($fullName)) {
        $error = "Họ và tên không được để trống.";
    } elseif (!empty($phone) && !preg_match("/^[0-9]{10,11}$/", $phone)) {
        $error = "Số điện thoại không đúng định dạng (gồm 10-11 chữ số).";
    } elseif (empty($gender)) {
        $error = "Vui lòng chọn giới tính.";
    } else {
        if ($studentDAO->update($student)) {
            header("Location: student_index.php");
            exit;
        } else {
            $error = "Cập nhật sinh viên thất bại! Có lỗi xảy ra từ CSDL.";
        }
    }
}

require_once "includes/header.php";
?>

<div class="container mt-4 mb-5">
    <h2>Cập nhật sinh viên</h2>
    
    <?php if(!empty($error)){ ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php } ?>

    <form method="post">
        <div class="mb-3">
            <label class="form-label">Mã sinh viên <span class="text-danger">*</span></label>
            <input type="text" name="studentCode" class="form-control" value="<?= htmlspecialchars($student->studentCode) ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Họ và tên <span class="text-danger">*</span></label>
            <input type="text" name="fullName" class="form-control" value="<?= htmlspecialchars($student->fullName) ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($student->phone) ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Giới tính <span class="text-danger">*</span></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Nam" <?= ($student->gender == 'Nam') ? 'checked' : '' ?>>
                <label class="form-check-label">Nam</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Nữ" <?= ($student->gender == 'Nữ') ? 'checked' : '' ?>>
                <label class="form-check-label">Nữ</label>
            </div>
        </div>
        
        <button class="btn btn-primary" type="submit">Cập nhật</button>
        <a href="student_index.php" class="btn btn-secondary">Quay lại</a>
    </form>
</div>

<?php
require_once "includes/footer.php";
?>