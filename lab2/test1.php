<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#f5f5f5;
            padding:20px;
        }

        nav{
            background:#0d6efd;
            margin-bottom:30px;
        }

        nav ul{
            list-style:none;
            display:flex;
        }

        nav li{
            flex:1;
        }

        nav a{
            display:block;
            color:white;
            text-decoration:none;
            text-align:center;
            padding:15px;
        }

        nav li:hover{
            background:#084298;
        }

        .box{
            width:800px;
            margin:auto;
            background:white;
            padding:20px;
            margin-bottom:30px;
            border-radius:8px;
            box-shadow:0 0 8px #ccc;
        }

        h3{
            color:#0d6efd;
            margin-bottom:15px;
            text-align:center;
        }

        ul{
            list-style:none;
        }

        ul li{
            background:#e7f1ff;
            margin-bottom:8px;
            padding:10px;
            border-left:5px solid blue;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th,
        table td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }

        table th{
            background:#0d6efd;
            color:white;
        }

        table tr:nth-child(even){
            background:#f8f9fa;
        }

        label{
            display:block;
            margin-top:10px;
            margin-bottom:5px;
            font-weight:bold;
        }

        input[type=text],
        select{
            width:100%;
            padding:8px;
        }

        .radio label,
        .check label{
            display:inline-block;
            margin-right:15px;
            font-weight:normal;
        }

        .btn{
            text-align:center;
            margin-top:20px;
        }

        .btn input{
            padding:10px 20px;
            border:none;
            color:white;
            cursor:pointer;
        }

        .btn input[type=submit]{
            background:#0d6efd;
        }

        .btn input[type=reset]{
            background:gray;
        }

    </style>
</head>

<body>

<?php

$menu = [
    "Trang chủ",
    "Tin tức",
    "Liên hệ",
    "Giới thiệu"
];

$monHoc = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL"
];

$sinhVien = [
    ["SV001","Nguyễn Văn An","Nam","CNTT1"],
    ["SV002","Trần Thị Bình","Nữ","CNTT2"],
    ["SV003","Lê Văn Cường","Nam","CNTT1"],
    ["SV004","Phạm Thị Dung","Nữ","CNTT3"]
];

$khoa = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];

$lop = [
    "CNTT1",
    "CNTT2",
    "CNTT3",
    "CNTT4"
];

$gioiTinh = [
    "Nam",
    "Nữ",
    "Khác"
];

$soThich = [
    "Lập trình",
    "Đọc sách",
    "Âm nhạc",
    "Du lịch",
    "Thể thao"
];

?>
<nav>
    <ul>
        <?php
        foreach($menu as $m){
            echo "<li><a href='#'>$m</a></li>";
        }
        ?>
    </ul>
</nav>

<div class="box">
    <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>

    <ul>
        <?php
        foreach($monHoc as $mh){
            echo "<li>$mh</li>";
        }
        ?>
    </ul>
</div>

<div class="box">
    <h3>Danh sách sinh viên</h3>

    <table>
        <tr>
            <th>STT</th>
            <th>Mã SV</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Lớp</th>
        </tr>

        <?php
        $stt = 1;

        foreach($sinhVien as $sv){
            echo "<tr>";
            echo "<td>".$stt++."</td>";
            echo "<td>".$sv[0]."</td>";
            echo "<td>".$sv[1]."</td>";
            echo "<td>".$sv[2]."</td>";
            echo "<td>".$sv[3]."</td>";
            echo "</tr>";
        }
        ?>

    </table>
</div>
<div class="box">

    <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>

    <form action="#" method="post">

        <label>Họ và tên</label>
        <input type="text" name="hoten" placeholder="Nhập họ và tên">


        <label>Khoa</label>
        <select name="khoa">

            <option>-- Chọn khoa --</option>

            <?php
            foreach($khoa as $k){
                echo "<option>$k</option>";
            }
            ?>

        </select>


        <label>Lớp</label>
        <select name="lop">

            <option>-- Chọn lớp --</option>

            <?php
            foreach($lop as $l){
                echo "<option>$l</option>";
            }
            ?>

        </select>


        <label>Giới tính</label>

        <div class="radio">

            <?php
            foreach($gioiTinh as $gt){

                echo "
                <label>
                    <input type='radio' name='gioitinh' value='$gt'>
                    $gt
                </label>";

            }
            ?>

        </div>


        <label>Sở thích</label>

        <div class="check">

            <?php
            foreach($soThich as $st){

                echo "
                <label>
                    <input type='checkbox' name='sothich[]' value='$st'>
                    $st
                </label>";

            }
            ?>

        </div>


        <div class="btn">

            <input type="submit" value="Đăng ký">

            <input type="reset" value="Làm mới">
        </div>


    </form>

</div>
</body>
</html>