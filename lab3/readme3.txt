1. Khi nào dùng Function, khi nào dùng Class và Object?
- Dùng Function (Hàm độc lập): Khi cần xử lý một tác vụ chung chung, độc lập, không gắn với dữ liệu của một thực thể cụ thể nào.
  Ví dụ:
  function tinhTong($a, $b) {
      return $a + $b;
  }

- Dùng Class/Object (Hướng đối tượng): Khi cần gom chung cả Dữ liệu (Thuộc tính) và Hành động (Phương thức) của một thực thể lại với nhau để dễ quản lý.
  Ví dụ:
  class Student {
      public $name = "Phát";
      public function diHoc() {
          echo "Đang đi học...";
      }
  }

2. Ý nghĩa của từ khóa $this
- $this đại diện cho "đối tượng hiện tại" đang gọi hàm đó, giúp lấy đúng dữ liệu của mình mà không bị nhầm với đối tượng khác.
  Ví dụ:
  class Student {
      public $scorePhp = 9.0;
      public function getScore() {
          // Lấy điểm PHP của chính đối tượng này
          return $this->scorePhp; 
      }
  }

3. Ý nghĩa của toán tử mũi tên (->)
- Dùng để "trỏ" vào bên trong một đối tượng nhằm lấy ra thuộc tính hoặc gọi một phương thức. (Tương đương dấu chấm "." trong các ngôn ngữ khác như JS, C#).
  Ví dụ:
  $sv = new Student();
  echo $sv->name;
  $sv->getScore();

4. Lợi ích của việc tái sử dụng phương thức (Method Reuse)
- Giúp code không bị lặp lại (quy tắc DRY) và cực kỳ dễ bảo trì. Nếu có thay đổi logic, chỉ cần sửa ở 1 nơi.
  Ví dụ: Hàm getRank() tái sử dụng lại hàm getAverage() thay vì phải tự viết lại công thức cộng điểm chia 3:
  public function getAverage() {
      return ($this->html + $this->css + $this->php) / 3;
  }

  public function getRank() {
      $avg = $this->getAverage(); 
      if ($avg >= 8.0) {
          return "Giỏi";
      }
      return "Khá";
  }