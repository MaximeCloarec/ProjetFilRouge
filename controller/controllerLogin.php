<?php include "function.php";
include "model/modellogin.php" ?>


<?php echo viewHeader();
echo viewLogin(loginForm());
echo viewFooter();
?>

<?php
function loginForm()
{
    if (isset($_POST["login"])) {
        if (!isset($_POST["username"]) || empty($_POST["username"]) || !isset($_POST["password"]) || empty($_POST["password"])) {
            return "Les champs de connexion ne sont pas correctement rempli";
        }
        $login = sanitize($_POST["login"]);
        $password = sanitize($_POST["password"]);
        $bdd = connectionBDD();
        $verif = loginVerification($bdd, $login);
        if (!isset($verif) || empty($verif)) {
            return "L'identifiant de connexion n'existe pas";
        }
        $hash = userPassword($bdd, $login);
        if (!password_verify($password, $hash)) {
            return "Le mot de passe rentré est incorrect";
        }
        $_SESSION["data"] = getInfoLogin($bdd, $login);
    }
}
?>