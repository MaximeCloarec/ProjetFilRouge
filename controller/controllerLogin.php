<?php include "function.php";
include "model/modellogin.php" ?>

<?php
$data = loginForm();
?>
<?php echo viewHeader();
echo viewLogin($data);
echo viewFooter();
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
        // $_SESSION["data"] = getInfoLogin($bdd, $login);
        if (isset($_POST["rememberMe"])) {
            $token = bin2hex(random_bytes(64));
            $bdd = connectionBDD();
            updateToken($bdd, $token, $login);
            setcookie("rememberMe",$token,time()+86400*30,"/","",false,true);
        }
    }
}
?>