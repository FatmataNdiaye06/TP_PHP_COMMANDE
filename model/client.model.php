<?php
    $clients = [
        0=>['nomPrenom'=>'Fatmata Ndiaye','tel'=>'771112277','address'=>'Fatick'],
        1=>['nomPrenom'=>'Astou Sene','tel'=>'781234567','address'=>'Dakar'],
    ];

    function getClientsSansCommande(array $clients, array $commandes): array
{
    $clientsAvecCommande = array_unique(array_column($commandes, 'client'));
    $clientsSansCommande = [];

    foreach ($clients as $index => $client) {
        if (!in_array($index, $clientsAvecCommande)) {
            $clientsSansCommande[] = $client;
        }
    }

    return $clientsSansCommande;
}