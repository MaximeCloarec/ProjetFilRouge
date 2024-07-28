<?php function lirePlats($bdd)
{
    $req = $bdd->prepare("SELECT * FROM plats");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
