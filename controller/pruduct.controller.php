<?php
function saveProduct(){

    global $products;
    do {
        $errors = [];
        $libelle = saisie("Entrez le libellé: ");
        obligatoire($libelle,$errors,"Le libellé est obligatoire");
        unique($products,$libelle,$errors,"Ce libellé existe déjà");
        messageError($errors);
    } while (count($errors)!= 0);
    $newProduct=[
        "ref"=>genererReference($products),
        "libele" => $libelle,
    ];
    $products[] = $newProduct;
}