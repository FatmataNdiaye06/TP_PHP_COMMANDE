<?php

function saveClient(array &$clients): void
{
    do {
        $errors = [];
        $nom = saisie("Entrer votre nom: ");
        obligatoire($nom, $errors, "Le nom est obligatoire", "nom");

        $telephone = saisie("Entrer le telephone: ");
        obligatoire($telephone, $errors, "Le telephone est obligatoire", "tel");
        unique($clients, $telephone, $errors, "Le telephone existe déjà", "tel");

        $adresse = saisie("Entrer votre adresse: ");
        messageError($errors);
    } while (count($errors) != 0);

    $newClient = [
        'nomPrenom' => $nom,
        'tel' => $telephone,
        'address' => $adresse,
    ];

    $clients[] = $newClient;
}

function listerClientsSansCommandeAction(array $clients, array $commandes): void
{
    $clientsSansCommande = getClientsSansCommande($clients, $commandes);
    ListeClients($clientsSansCommande);
}
function ajouterClientAction(array &$clients): void
{
    saveClient($clients);
    listeClients($clients);
}

