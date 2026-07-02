function getProductByLibele(array $products, string $value): int
{
    foreach ($products as $index => $product) {
        if ($product["libele"] == $value) {
            return $index;
        }
    }
    return -1;
}

function supprimerProduit(int $index, array &$products): array
{
    return array_splice($products, $index, 1)[0];
}
