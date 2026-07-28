<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - Cửa Hàng Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .brand-box {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border-radius: 5px;
        }
        .brand-box:hover {
            background-color: #e9ecef;
        }
        .price-text {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php
        $menus = ["Trang chủ", "Sản phẩm", "Khuyến mãi", "Tin tức", "Liên hệ"];

        $products = [
            ["name" => "Điện thoại iPhone 14 Pro", "price" => 25000000],
            ["name" => "Samsung Galaxy S23 Ultra", "price" => 22000000],
            ["name" => "MacBook Air M2", "price" => 27500000],
            ["name" => "Tai nghe AirPods Pro 2", "price" => 5500000]
        ];

        $brands = ["Apple", "Samsung", "Sony", "Dell", "Asus", "HP"];
        $categories = ["Điện thoại di động", "Laptop & Máy tính", "Thiết bị âm thanh", "Phụ kiện"];
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Cửa Hàng LTW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($menus as $menu) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?= $menu ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="p-4 bg-light border rounded text-center">
            <h3>Bài tập Lab 2 - Lập trình Web</h3>
            <p>Danh sách sản phẩm và Form đăng ký</p>
        </div>
    </div>

    <div class="container mt-4">
        <h4 class="mb-3 border-bottom pb-2">Sản Phẩm Mới</h4>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="images/Fleet Woven 1000.jpg" class="card-img-top" alt="Ảnh sản phẩm">
                        <div class="card-body text-center">
                            <h6 class="card-title"><?= $product["name"] ?></h6>
                            <p class="price-text"><?= number_format($product["price"], 0, ',', '.') ?> VNĐ</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Chi tiết</a>
                            <a href="#" class="btn btn-sm btn-danger">Mua</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container mt-3">
        <h4 class="mb-3 border-bottom pb-2">Thương Hiệu</h4>
        <div class="row">
            <?php foreach ($brands as $brand) { ?>
                <div class="col-4 col-md-2 mb-3">
                    <div class="brand-box">
                        <?= $brand ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container mt-4 mb-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <strong>Đăng Ký Nhận Thông Tin</strong>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" name="fullname" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Danh mục quan tâm</label>
                            <select class="form-select" name="category">
                                <option value="">-- Chọn danh mục --</option>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?= $category ?>"><?= $category ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ghi chú thêm</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Gửi Yêu Cầu</button>
                    <button type="reset" class="btn btn-secondary">Nhập Lại</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">Thực hiện bởi: Huỳnh Đỗ Nhuận Phát - MSSV: 2123110381</p>
            <p class="mb-0 small">Môn: Lập trình Web 1</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>