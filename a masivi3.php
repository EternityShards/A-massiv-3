<?php
// Определение ассоциативного массива с информацией о товарах (название товара => количество на складе)
$products = array(
    "Молоко" => 15,
    "Хлеб" => 8,
    "Яйца" => 20,
    "Масло" => 5,
    "Сахар" => 12
);

// Инициализация массива для хранения информации о товарах, количество которых меньше 10 штук
$low_quantity_products = array();

// Находим товары с количеством меньше 10 штук
foreach ($products as $product => $quantity) {
    if ($quantity < 10) {
        $low_quantity_products[$product] = $quantity;
    }
}

// Выводим информацию о товарах с количеством меньше 10 штук
echo "Товары с количеством меньше 10 штук:<br>";
foreach ($low_quantity_products as $product => $quantity) {
    echo "$product: $quantity шт.<br>";
}
?>
