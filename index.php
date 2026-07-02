<?php
require(__DIR__."/view/readline.view.php");
require(__DIR__."/utils/validator.utils.php");
require(__DIR__."/utils/error.utils.php");
require(__DIR__."/controller/pruduct.controller.php");
require(__DIR__."/model/pruduct.model.php");
require(__DIR__."/service/pruduct.service.php");




// Increment1: Gestion des produits
// feat1: Enregistrer un produit
/*
RG1: libelle obligatoire et unique
RG2: la reference est generer suivant le format REF001,REF010,REF100
RG3: Le prix et quantité sont positifs 
 */
// feat2: Archiver un produit
// feat3: Lister les produits non archivés ou archivés
saveProduct();
var_dump($products);