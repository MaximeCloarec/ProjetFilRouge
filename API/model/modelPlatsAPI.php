<?php function lirePlats($bdd)
{
    $req = $bdd->prepare("SELECT id_plats,alt_plats,img_plats,name_plats,time_plats,type_plats,week_plats FROM plats JOIN semaine ON plats.id_semaine = semaine.id_semaine JOIN type ON plats.id_type = type.id_type ");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
