<?php

class Student
{
    // Properties
    public string $studentId;
    public string $fullName;
    public string $gender;
    public int $birthYear;
    public float $scoreHtml;
    public float $scoreCss;
    public float $scorePhp;

    // Constructor
    public function __construct(
        string $studentId,
        string $fullName,
        string $gender,
        int $birthYear,
        float $scoreHtml,
        float $scoreCss,
        float $scorePhp
    ) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->scoreHtml = $scoreHtml;
        $this->scoreCss = $scoreCss;
        $this->scorePhp = $scorePhp;
    }

    
    /**
     * @return float
     */
    public function getTotalScore(): float
    {
        return $this->scoreHtml + $this->scoreCss + $this->scorePhp;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return date('Y') - $this->birthYear;
    }

    /**
     * @return float
     */
    public function getAverage(): float
    {
        return round($this->getTotalScore() / 3, 2);
    }

    /**
     * @return string
     */
    public function getRank(): string
    {
        $avg = $this->getAverage();
        if ($avg >= 9.0) return "Xuất sắc";
        if ($avg >= 8.0) return "Giỏi";
        if ($avg >= 6.5) return "Khá";
        if ($avg >= 5.0) return "Trung bình";
        return "Yếu";
    }

    /**
     * @return string
     */
    public function getScholarship(): string
    {
        return $this->getAverage() >= 8.0 ? "Đạt" : "Không Đạt";
    }

    /**
     * Hiển thị 1 dòng trong bảng (Chỉ tô màu cột Học Bổng)
     * @return void
     */
    public function showInfo(): void
    {
        $rank = $this->getRank();
        $scholarship = $this->getScholarship();
        
        // Tạo thẻ badge màu cho Học bổng: Đạt (màu xanh), Không Đạt (màu xám)
        $scholarshipHtml = ($scholarship === "Đạt") 
            ? "<span class='badge bg-success'>Đạt</span>" 
            : "<span class='badge bg-secondary'>Không Đạt</span>";

        echo "
            <tr>
                <td>{$this->studentId}</td>
                <td>{$this->fullName}</td>
                <td>{$this->gender}</td>
                <td>{$this->birthYear}</td>
                <td>{$this->getAge()}</td>
                <td>{$this->scoreHtml}</td>
                <td>{$this->scoreCss}</td>
                <td>{$this->scorePhp}</td>
                <td>{$this->getTotalScore()}</td>
                <td>{$this->getAverage()}</td>
                <td><span class='badge bg-primary'>{$rank}</span></td>
                <td>{$scholarshipHtml}</td>
            </tr>
        ";
    }
}