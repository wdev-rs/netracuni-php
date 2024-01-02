<?php

include 'vendor/autoload.php';

$netRacuni = new WdevRs\NetRacuniPhp\NetRacuniClient('net_racuni_local_z8MjqQwJbBXnDSoNY3GNiW69GokunkXHXaBDRAsv21eb35ed');
//$netRacuni->sandbox();

$items = [
    "items" => [
        [
            "name" => "Test Item",
            "taxLabels" => [
                "A"
            ],
            "unit" => "KOM",
            "quantity" => 2,
            "price" => 152.66
        ]
    ]
];

try{
    var_dump($netRacuni->ping());
    var_dump(json_encode($netRacuni->getTaxLabels()));
    $result = $netRacuni->createInvoice($items);

//    var_dump($result->getInvoice());
//    var_dump($result->getInvoicePdfUrl());
}
catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
