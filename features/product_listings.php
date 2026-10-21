<?php
// Product listing page (starter code - replace with your final project code)
$products = [
    ['name' => 'Vintage Denim Jacket', 'category' => 'Clothes',      'price' => 450],
    ['name' => 'Used Smartphone',      'category' => 'Gadgets',      'price' => 3500],
    ['name' => 'Pre-loved Novel Set',  'category' => 'Books',        'price' => 250],
    ['name' => 'Leather Wallet',       'category' => 'Accessories',  'price' => 300],
];
foreach ($products as $p) {
    echo "<div class='product'><h3>{$p['name']}</h3><p>{$p['category']} - PHP {$p['price']}</p></div>";
}
