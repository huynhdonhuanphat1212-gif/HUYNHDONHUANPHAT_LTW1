<?php 
    // Nhúng giao diện Header
    require 'includes/header.php'; 
    // Nhúng file chứa các function
    require 'functions/common.php';

    $products_C1 = [
        ["id" => "LT001", "proname" => "Dell Inspiron 15", "quantity" => 10, "price" => 16500000],
        ["id" => "LT002", "proname" => "HP Pavilion 14", "quantity" => 8, "price" => 17200000],
        ["id" => "LT003", "proname" => "Asus VivoBook 15", "quantity" => 15, "price" => 15500000],
        ["id" => "LT004", "proname" => "Acer Nitro 5", "quantity" => 5, "price" => 21000000],
        ["id" => "LT005", "proname" => "Lenovo IdeaPad 3", "quantity" => 12, "price" => 14500000],
        ["id" => "LT006", "proname" => "MacBook Air M1", "quantity" => 20, "price" => 18900000],
        ["id" => "LT007", "proname" => "MSI Bravo 15", "quantity" => 7, "price" => 19500000],
        ["id" => "LT008", "proname" => "Gigabyte G5", "quantity" => 6, "price" => 20500000],
        ["id" => "LT009", "proname" => "LG Gram 14", "quantity" => 4, "price" => 25000000],
        ["id" => "LT010", "proname" => "Surface Laptop 4", "quantity" => 3, "price" => 22000000],
    ];

    $products_C2 = [
        ["id" => "PK001", "proname" => "Chuột Logitech M331", "quantity" => 30, "price" => 320000],
        ["id" => "PK002", "proname" => "Bàn phím DareU EK87", "quantity" => 20, "price" => 690000],
        ["id" => "PK003", "proname" => "Tai nghe Sony MDR", "quantity" => 15, "price" => 550000],
        ["id" => "PK004", "proname" => "Lót chuột Razer", "quantity" => 50, "price" => 150000],
        ["id" => "PK005", "proname" => "Đế tản nhiệt CoolerMaster", "quantity" => 10, "price" => 450000],
        ["id" => "PK006", "proname" => "USB Kingston 64GB", "quantity" => 40, "price" => 200000],
        ["id" => "PK007", "proname" => "Ổ cứng di động WD 1TB", "quantity" => 8, "price" => 1200000],
        ["id" => "PK008", "proname" => "Hub Ugreen 4 port", "quantity" => 25, "price" => 350000],
        ["id" => "PK009", "proname" => "Balo laptop Targus", "quantity" => 12, "price" => 800000],
        ["id" => "PK010", "proname" => "Webcam Logitech C920", "quantity" => 5, "price" => 1500000],
    ];
?>

<!-- main -->
<main class="container my-5">
    <section class="mb-5">
        <?php showProductTable($products_C1, "Danh sách Loại C1"); ?>
    </section>

    <section class="mb-5">
        <?php showProductTable($products_C2, "Danh sách Loại C2", "VNĐ", 2); ?>
    </section>

    <section class="mb-5">
        <h3 class="mt-4 mb-3">Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam id quasi voluptas saepe! Quasi repellat aliquid est dolorum quidem tenetur error ad similique, molestias non, iste exercitationem suscipit ex minima molestiae corrupti eligendi quibusdam voluptatibus facilis nobis et ducimus esse! Rerum sapiente ut asperiores laudantium, aut quia quam nisi accusamus explicabo vero numquam maxime, neque obcaecati, iusto incidunt eligendi ab voluptas eum. Consequuntur voluptate voluptatum totam pariatur nostrum asperiores deserunt consectetur ipsa iste delectus! Iusto, totam hic suscipit est earum magni quisquam blanditiis eveniet numquam eum laboriosam sed tempora unde ipsum delectus mollitia sequi dolorem explicabo. Harum in minima possimus!.</p>
    </section>
</main>
    <section class="mb-5">
        <h3 class="mt-4 mb-3">Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam id quasi voluptas saepe! Quasi repellat aliquid est dolorum quidem tenetur error ad similique, molestias non, iste exercitationem suscipit ex minima molestiae corrupti eligendi quibusdam voluptatibus facilis nobis et ducimus esse! Rerum sapiente ut asperiores laudantium, aut quia quam nisi accusamus explicabo vero numquam maxime, neque obcaecati, iusto incidunt eligendi ab voluptas eum. Consequuntur voluptate voluptatum totam pariatur nostrum asperiores deserunt consectetur ipsa iste delectus! Iusto, totam hic suscipit est earum magni quisquam blanditiis eveniet numquam eum laboriosam sed tempora unde ipsum delectus mollitia sequi dolorem explicabo. Harum in minima possimus!.</p>
    </section>
</main>

    <section class="mb-5">
        <h3 class="mt-4 mb-3">Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam id quasi voluptas saepe! Quasi repellat aliquid est dolorum quidem tenetur error ad similique, molestias non, iste exercitationem suscipit ex minima molestiae corrupti eligendi quibusdam voluptatibus facilis nobis et ducimus esse! Rerum sapiente ut asperiores laudantium, aut quia quam nisi accusamus explicabo vero numquam maxime, neque obcaecati, iusto incidunt eligendi ab voluptas eum. Consequuntur voluptate voluptatum totam pariatur nostrum asperiores deserunt consectetur ipsa iste delectus! Iusto, totam hic suscipit est earum magni quisquam blanditiis eveniet numquam eum laboriosam sed tempora unde ipsum delectus mollitia sequi dolorem explicabo. Harum in minima possimus!.</p>
    </section>
</main>

<?php 
    // Nhúng giao diện Footer
    require 'includes/footer.php'; 
?>
