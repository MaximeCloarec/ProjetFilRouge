<?php

session_start();
include "view/ViewHeader.php";
include "view/ViewFooter.php";
include "model/modelView.php";
include "model/modelIndex.php";
include "function.php";
include "model/modelUsers.php";

$url = parse_url($_SERVER["REQUEST_URI"]);
$path = isset($url["path"]) ? $url["path"] : "/";
var_dump($_SESSION["infoTab"]);
if (empty($_SESSION["status"])) {
    if (isset($_COOKIE["rememberMe"])) {
        $bdd = connectionBDD();
        $_SESSION["status"] = "connecté";
        $_SESSION["infoTab"] = coockieChecker($bdd, $_COOKIE["rememberMe"]);
    }
}

switch ($path) {    
    case "/GourmetBox/":
        include "view/ViewIndex.php";
        include "controller/controllerIndex.php";
        break;

    case "/GourmetBox/RecetteSemaine":
        include "view/ViewRecetteSemaine.php";
        include "controller/controllerRecetteSemaine.php";
        break;

    case "/GourmetBox/Login":
        include "view/ViewLogin.php";
        include "controller/controllerLogin.php";
        break;

    case "/GourmetBox/Inscription":
        include "view/ViewInscription.php";
        include "controller/controllerInscription.php";
        break;

    case "/GourmetBox/Account":
        include "view/ViewAccount.php";
        include "controller/controllerAccount.php";
        break;

    case "/GourmetBox/Deconnexion":
        include "view/ViewDeconnexion.php";
        include "controller/controllerDeconnexion.php";
        break;

    default:
        include "view/View404.php";
        include "controller/controller404.php";
        break;
}
