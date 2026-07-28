<?php
$dir = __DIR__ . '/images';
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}
$url = 'http://dummyimage.com/300x200/cccccc/000000.jpg&text=Product';
$img = file_get_contents($url);
if ($img) {
    file_put_contents($dir . '/default-product.jpg', $img);
    echo "Image created successfully.";
} else {
    echo "Failed.";
}
?>
