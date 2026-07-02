<?php
require_once __DIR__ . '/../utils/view.utils.php';
require_once __DIR__ . '/../utils/enums.php';

function demanderLibelleProduit(): string
{
    return saisie("Entrez le libellé: ");
}

function demanderPrixProduit(): float
{
    return (float) saisie("Entrez le prix: ");
}

function demanderQuantiteProduit(): int
{
    return (int) saisie("Entrez la quantité: ");
}

function demanderLibelleRecherche(): string
{
    return saisie("Veuillez renseigner le libellé \n");
}

function afficherProduit(array $product): void
{
    echo "Réf: {$product['ref']} - Libellé: {$product['libele']} - Prix: {$product['prix']} - Quantité: {$product['quantite']}\n";
}

function afficherListeProduits(array $products): void
{
    foreach ($products as $product) {
        afficherProduit($product);
    }
}

function afficherProduitIntrouvable(): void
{
    echo MessageErreur::PRODUIT_INTROUVABLE->value . "\n";
}
