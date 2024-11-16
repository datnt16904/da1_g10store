<?php
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";

require_once __DIR__ . "/controllers/HomController.php";

$ctl = $_GET['ctl'] ?? '';


$data = [
    'name' => 'Súp thưởng cho mèo, cat food đầy đủ dinh dưỡng',
    'image' => '',
    'price' => 100000,
    'quantity' => 100,
    'description' => 'Súp thưởng cho mèo, cat food đầy đủ dinh dưỡng giá rẻ thanh 15g Món ăn cho mèo Món ăn cho thú cưng Món ăn cho mè',
    'status' => 1,
    'category_id' => 1
];











match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    default => view("errors.404"),
};
