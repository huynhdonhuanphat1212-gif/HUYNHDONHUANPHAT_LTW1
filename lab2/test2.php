<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa Hàng Sản Phẩm - Lab 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .brand-box {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 20px;
            border-radius: 8px;
            font-weight: bold;
            color: #495057;
            transition: 0.3s;
        }
        .brand-box:hover {
            background-color: #e9ecef;
            transform: translateY(-5px);
        }
        .product-card {
            transition: 0.3s;
        }
        .product-card:hover {
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .price-text {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.2rem;
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

        $categories = ["Điện thoại di động", "Laptop & Máy tính", "Thiết bị âm thanh", "Phụ kiện thông minh"];
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong>LOGO STORE</strong>
            </a>
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

    <div class="p-5 text-center bg-light text-dark">
        <div class="container">
            <h1 class="display-4 fw-bold">Chào mừng đến với Cửa hàng Công nghệ</h1>
            <p class="lead">Cung cấp các sản phẩm điện tử chính hãng, chất lượng cao với giá thành tốt nhất thị trường.</p>
            <a href="#products" class="btn btn-primary btn-lg mt-3">Khám phá ngay</a>
        </div>
    </div>

    <div class="container mt-5" id="products">
        <h2 class="text-center mb-4">Sản Phẩm Nổi Bật</h2>
        <div class="row g-4">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card product-card h-100">
                        <img src="images/default-product.jpg" class="card-img-top" alt="Hình ảnh sản phẩm">
                        <div class="card-body text-center d-flex flex-column">
                            <h5 class="card-title"><?= $product["name"] ?></h5>
                            <p class="card-text price-text mb-4 mt-auto">
                                <?= number_format($product["price"], 0, ',', '.') ?> VNĐ
                            </p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
                                <a href="#" class="btn btn-danger">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Thương Hiệu Đồng Hành</h2>
        <div class="row g-3 text-center">
            <?php foreach ($brands as $brand) { ?>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="brand-box">
                        <?= $brand ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Đăng Ký Nhận Báo Giá</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Họ và tên *</label>
                                    <input type="text" class="form-control" name="fullname" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email *</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Số điện thoại *</label>
                                    <input type="tel" class="form-control" name="phone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Danh mục sản phẩm quan tâm</label>
                                <select class="form-select" name="category">
                                    <option value="" disabled selected>-- Chọn danh mục --</option>
                                    <?php foreach ($categories as $category) { ?>
                                        <option value="<?= $category ?>"><?= $category ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label d-block">Hình thức nhận báo giá</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="contact_method" value="Email" checked>
                                        <label class="form-check-label">Email</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="contact_method" value="Điện thoại">
                                        <label class="form-check-label">Điện thoại</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Thời gian liên hệ</label>
                                    <select class="form-select" name="contact_time">
                                        <option value="Buổi sáng">Buổi sáng (8h-11h)</option>
                                        <option value="Buổi chiều">Buổi chiều (13h-17h)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Nội dung yêu cầu</label>
                                <textarea class="form-control" name="message" rows="4" placeholder="Nhập yêu cầu chi tiết..."></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5">Gửi Yêu Cầu</button>
                                <button type="reset" class="btn btn-secondary px-5">Làm Mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-1">&copy; 2026 Cửa Hàng Công Nghệ. Đã đăng ký bản quyền.</p>
            <p class="mb-0 text-muted small">Địa chỉ: 123 Đường Lập Trình, Quận 1, TP. HCM | Hotline: 1900 1234</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>