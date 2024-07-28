<?php include "function.php";
include "model/modelInscription.php";
?>

<?php echo viewHeader();
echo viewInscription(inscriptionForm());
echo viewFooter(); ?>

<?php function inscriptionForm()
{
    if (isset($_POST["inscription"])) {
        if (
            !isset($_POST["username"]) || empty($_POST["username"]) ||
            !isset($_POST["password"]) || empty($_POST["password"]) ||
            !isset($_POST["passwordVerification"]) || empty($_POST["passwordVerification"])
        ) {
            return "Information d'inscription manquante";
        }

        if ($_POST["password"] != $_POST["passwordVerification"]) {
            return "Mot de passe différent";
        }

        $login = sanitize($_POST["username"]);
        $password = sanitize($_POST["password"]);
        $bdd = connectionBDD();
        if (!empty(loginDuplicate($bdd, $login))) {
            return "L'indentifiant est déja utilisé";
        }
        $password = password_hash($password, PASSWORD_DEFAULT);

        inscription($bdd, $login, $password);
        echo '<script>
        setTimeout(function() {
            window.location.href = "/GourmetBox/Login";
        }, 3000);
    </script>';
        return "Votre inscription est terminé,vous pouvez maintenant vous connecter !";
    }
}
?>