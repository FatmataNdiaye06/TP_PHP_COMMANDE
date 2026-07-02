<?php
require(__DIR__."/view/readline.view.php");
require(__DIR__."/view/client.view.php");


require(__DIR__."/utils/validator.utils.php");
require(__DIR__."/utils/error.utils.php");

require(__DIR__."/controller/pruduct.controller.php");
require(__DIR__."/controller/client.controller.php");

require(__DIR__."/model/pruduct.model.php");
require(__DIR__."/model/commande.model.php");
require(__DIR__."/model/client.model.php");

require(__DIR__."/service/pruduct.service.php");
require(__DIR__."/service/client.service.php");





// Increment1: Gestion des produits
// feat1: Enregistrer un produit
/*
RG1: libelle obligatoire et unique
RG2: la reference est generer suivant le format REF001,REF010,REF100
RG3: Le prix et quantité sont positifs 
 */
// feat2: Archiver un produit
// feat3: Lister les produits non archivés ou archivés




// Increment2: Gestion des clients
// feat1: Enregistrer un client
    /*
    RG1: telephone est  obligatoire et unique
    RG2: la nom prenom  est  obligatoire
    */
// feat2: Lister les clients qui n'ont pas de commandes
// saveProduct();
// ajouterClientAction($clients);
listerClientsSansCommandeAction($clients,$commandes);
// var_dump($products);