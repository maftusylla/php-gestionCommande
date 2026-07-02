
<?php
$products = [
    0=>['ref'=>'ref1','libele'=>'lib1','prix'=>2000,'quantite'=>12],
    1=>['ref'=>'ref2','libele'=>'lib2','prix'=>500,'quantite'=>2],
];

$productsArchived = [];


function ajouterProduit(array &$products, string $ref, string $libelle, float $prix, int $quantite): array
{
    $newProduct = [
        "ref" => $ref,
        "libele" => $libelle,
        "prix" => $prix,
        "quantite" => $quantite,
    ];
    $products[] = $newProduct;
    return $newProduct;
}

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
