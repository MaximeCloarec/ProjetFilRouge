<?php function loginVerification($bdd, $login)
{
    $req = $bdd->prepare("SELECT login_users FROM users WHERE login_users=?");
    $req->bindParam(1, $login, PDO::PARAM_STR);
    $req->execute();
    return $req->fetch(PDO::FETCH_ASSOC);
} ?>

<?php function userPassword($bdd, $login)
{
    $req = $bdd->prepare("SELECT password_users FROM users WHERE login_users=?");
    $req->bindParam(1, $login, PDO::PARAM_STR);
    $req->execute();
    return $req->fetch(PDO::FETCH_ASSOC);
}
?>

<?php function getInfoLogin($bdd, $login)
{
    $req = $bdd->prepare("SELECT id_users,login_users,numberstreet_users,city_users,postal_users,country_users FROM users WHERE login_users=?");
    $req->bindParam(1, $login, PDO::PARAM_STR);
    $req->execute();
    return $req->fetch(PDO::FETCH_ASSOC);
}
?>

<?php function updateToken($bdd, $token, $login_user)
{
    $req = $bdd->prepare("UPDATE users SET rememberMe_users=? WHERE login_users= ? ");
    $req->bindParam(1, $token, PDO::PARAM_STR);
    $req->bindParam(2, $login_user, PDO::PARAM_STR);
    $req->execute();
}
?>