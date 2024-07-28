<?php

session_start();
include "view/ViewHeader.php";
include "view/ViewFooter.php";

$url = parse_url($_SERVER["REQUEST_URI"]);
$path = isset($url["path"]) ? $url["path"] : "/";

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

    default:
        include "view/View404.php";
        include "controller/controller404.php";
        break;
}
