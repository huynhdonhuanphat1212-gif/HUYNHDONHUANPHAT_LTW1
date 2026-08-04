<?php
require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../models/Student.php";

class StudentDAO
{
    private mysqli $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM students ORDER BY id DESC";
        
        $result = $this->conn->query($sql);

        $students = [];

        while ($row = $result->fetch_assoc()) {
            $student = new Student(
                $row["studentcode"],
                $row["fullname"],
                $row["phone"],
                $row["gender"]
            );
            $student->id = $row["id"];
            $student->createdAt = $row["created"];
            
            $students[] = $student;
        }
        
        return $students;
    }
    public function getById(int $id)
    {
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        if (!$row) {
            return null;
        }
        
        $student = new Student(
            $row["studentcode"],
            $row["fullname"],
            $row["phone"],
            $row["gender"]
        );
        $student->id = $row["id"];
        $student->createdAt = $row["created"];
        
        return $student;
    }
    public function insert(Student $student)
    {
        $sql = "INSERT INTO students(studentcode, fullname, phone, gender)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssss",
            $student->studentCode,
            $student->fullName,
            $student->phone,
            $student->gender
        );
        return $stmt->execute();
    }
    public function update(Student $student)
    {
        $sql = "UPDATE students SET studentcode = ?, fullname = ?, phone = ?, gender = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bind_param(
            "ssssi",
            $student->studentCode,
            $student->fullName,
            $student->phone,
            $student->gender,
            $student->id
        );
        
        return $stmt->execute();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bind_param("i", $id);
        
        return $stmt->execute();
    }
}
?>