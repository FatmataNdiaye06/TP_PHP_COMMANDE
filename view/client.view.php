<?php

function listeClients(array $clients): void
{
    if (empty($clients)) {
        echo "Aucun client a afficher\n";
        return;
    }
    foreach ($clients as $client) {
        echo "Nom: {$client["nomPrenom"]} - Tel: {$client["tel"]} - Adresse: {$client["address"]}\n";
    }
}