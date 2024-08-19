<?php 
include "model/modelLogin.php" ?>

<?php
$user = new Users();
echo $user->getView()->setBody(viewLogin(loginForm()))->render();
?>

<?php
function loginForm()
{
    if (isset($_POST["login"])) {
        if (!isset($_POST["username"]) || empty($_POST["username"]) || !isset($_POST["password"]) || empty($_POST["password"])) {
            return "Les champs de connexion ne sont pas correctement rempli";
        }
        $login = sanitize($_POST["username"]);
        $password = sanitize($_POST["password"]);
        $bdd = connectionBDD();
        $verif = loginVerification($bdd, $login);
        if (empty($verif)) {
            return "L'identifiant de connexion n'existe pas";
        }
        $hash = userPassword($bdd, $login);
        if (!password_verify($password, $hash["password_users"])) {
            return "Le mot de passe rentré est incorrect";
        }
        if (isset($_POST["rememberMe"])) {
            $token = bin2hex(random_bytes(64));
            $bdd = connectionBDD();
            updateToken($bdd, $token, $login);
            setcookie("rememberMe",$token,time()+60*60*24*7,"/","",false,true);
            $data = getInfoLogin($bdd, $login);
            $_SESSION["infoTab"] = $data;
            $_SESSION["status"] = "connecté";
            echo '<script>
        setTimeout(function() {
            window.location.href = "/GourmetBox/Account";
        }, 2000);
    </script>';
        return "Vous êtes maintenant connecté !";
        }
    }
}   
?>