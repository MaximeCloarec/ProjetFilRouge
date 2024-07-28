<?php
// Headers 
// Format des données envoyées
header("Content-Type: application/json; charset=UTF-8");
// Méthode autorisée, ici POST, mais ça peut être GET, PUT ou DELETE
header("Access-Control-Allow-Methods: POST");
// Durée de vie de la requête
header("Access-Control-Max-Age: 3600");
// Entêtes autorisées
header("Access-Control-Allow-Headers: Content-Type, Access-Control-AllowHeaders, Authorization, X-Requested-With");

include "model/modelPlatsAPI.php";
include "../function.php";

function getPlats()
{
    if ($_SERVER["REQUEST_METHOD"] != "GET") {
        http_response_code(405);
        echo json_encode(["message" => "La méthode n'est pas autorisé"]);
        return;
    }

    $bdd = connectionBDD();
    $data = lirePlats($bdd);
    http_response_code(200);
    echo json_encode($data);
}

getPlats();
