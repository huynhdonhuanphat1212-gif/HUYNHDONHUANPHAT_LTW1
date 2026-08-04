<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";

if (!isset($_GET["id"])) {
    header("Location: student_index.php");
    exit;
}

$id = (int)$_GET["id"];
$studentDAO = new StudentDAO();

$student = $studentDAO->getById($id);

if ($student == null) {
    header("Location: student_index.php");
    exit;
}

if ($studentDAO->delete($id)) {
    header("Location: student_index.php");
    exit;
} else {
    echo "<script>
        alert('Xóa sinh viên thất bại! Có lỗi xảy ra từ CSDL.');
        window.location.href = 'student_index.php';
    </script>";
}
?>