<?php
// Filter products by category (starter code)
function filterByCategory(array $products, string $category): array {
    return array_filter($products, fn($p) => $p['category'] === $category);
}
