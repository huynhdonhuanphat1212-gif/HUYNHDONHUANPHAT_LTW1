<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        nav {
            background: rgb(4, 40, 94);
            margin-bottom: 40px;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav li {
            flex: 1;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }
        nav ul li:hover {
            background: #084298;
        }

        .s1 {
            width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            margin-bottom: 40px;
        }
        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .s1 ul {
            list-style: none;
        }
        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: .3s;
        }
        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }

        .s2 {
            width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        .s2 h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #0d6efd;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa; 
        }

        .s3 {
            width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        .s3 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .s3 form > div {
            margin-bottom: 15px;
        }
        .s3 label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .s3 input[type="text"], .s3 select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .s3 .radio-inline, .s3 .checkbox-inline {
            display: inline-block;
            margin-right: 15px;
            font-weight: normal;
        }
        .s3 .radio-inline input, .s3 .checkbox-inline input {
            margin-right: 5px;
        }
        .s3 .btn-container {
            text-align: center;
            margin-top: 20px;
        }
        .s3 input[type="submit"], .s3 input[type="reset"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin: 0 5px;
        }
        .s3 input[type="submit"] {
            background-color: #0d6efd;
        }
        .s3 input[type="reset"] {
            background-color: #6c757d;
        }
    </style>
</head>
<body>

    <?php
        $menus = [
            "Trang chủ",
            "Tin tức",
            "Liên hệ",
            "Giới thiệu"
        ];

        $subjects = [
            "HTML",
            "CSS",
            "JavaScript",
            "PHP",
            "MySQL"
        ];

        $students = [
            [
                "id" => "SV001",
                "name" => "Nguyễn Văn An",
                "gender" => "Nam",
                "class" => "CNTT1"
            ],
            [
                "id" => "SV002",
                "name" => "Trần Thị Bình",
                "gender" => "Nữ",
                "class" => "CNTT2"
            ],
            [
                "id" => "SV003",
                "name" => "Lê Văn Cường",
                "gender" => "Nam",
                "class" => "CNTT1"
            ],
            [
                "id" => "SV004",
                "name" => "Phạm Thị Dung",
                "gender" => "Nữ",
                "class" => "CNTT3"
            ]
        ];

        $faculties = [ "Công nghệ thông tin", "Quản trị kinh doanh", "Kế toán", "Ngôn ngữ Anh" ];
        $classes = [ "A1"=> "CNTT1", "A2"=> "CNTT2", "A3"=> "CNTT3", "A4"=> "CNTT4" ];
        $genders = [ "Nam", "Nữ", "Khác" ];
        $hobbies = [ "LT" => "Lập trình", "DS" => "Đọc sách", "AN" => "Âm nhạc", "DL" => "Du lịch", "TT" => "Thể thao" ];
    ?>

    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href="#"><?= $menu ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php
                foreach($subjects as $subject){
                    echo "<li>$subject</li>";
                }
            ?>
        </ul>
    </section>

    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
            <?php foreach ($students as $index => $student) { ?>
            <tr>
                <td><?= $index + 1 ?></td> 
                <td><?= $student["id"] ?></td>
                <td><?= $student["name"] ?></td>
                <td><?= $student["gender"] ?></td>
                <td><?= $student["class"] ?></td>
            </tr>
            <?php } ?>
        </table>
    </section>

    <section class="s3">
        <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
        <form action="#" method="post">
            <div>
                <label>Họ và tên</label>
                <input type="text" name="fullname" placeholder="Nhập họ và tên">
            </div>
            <div>
                <label>Khoa</label>
                <select name="faculty">
                    <option value="">-- Chọn khoa --</option>
                    <?php foreach ($faculties as $faculty) { ?>
                        <option><?= $faculty ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label>Lớp</label>
                <select name="class">
                    <option value="">-- Chọn lớp --</option>
                    <?php foreach ($classes as $key => $class) { ?>
                        <option value="<?= $key ?>"><?= $class ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label>Giới tính</label>
                <div>
                    <?php foreach ($genders as $gender) { ?>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="<?= $gender ?>"> <?= $gender ?>
                        </label>
                    <?php } ?>
                </div>
            </div>
            <div>
                <label>Sở thích</label>
                <div>
                    <?php foreach ($hobbies as $key => $hobby) { ?>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hobbies[]" value="<?= $key ?>"> <?= $hobby ?>
                        </label>
                    <?php } ?>
                </div>
            </div>
            <div class="btn-container">
                <input type="submit" value="Đăng ký">
                <input type="reset" value="Làm mới">
            </div>
        </form>
    </section>

</body>
</html>