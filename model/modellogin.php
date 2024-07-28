<?php function loginVerification($bdd,$login){
    $req = $bdd->prepare("SELECT login_users FROM users WHERE login_users=?");
    $req->bindParam(1, $login, PDO::PARAM_STR);
    $req->execute();
    return $req->fetch(PDO::FETCH_ASSOC);
}?>

<?php function userPassword($bdd,$login) {
$req = $bdd->prepare("SELECT mdp_users FROM users WHERE login_users=?");
$req->bindParam(1, $login,PDO::PARAM_STR);
$req->execute();
return $req->fetchAll(PDO::FETCH_ASSOC);
} 
?>

<?php function getInfoLogin($bdd,$login){
    $req = $bdd->prepare("SELECT id_users,login_users,numberstreet_users,city_users,postal_users,country_users FROM users WHERE login_users=?");
    $req->bindParam(1, $login, PDO::PARAM_STR);
    $req->execute();
    return $req->fetch(PDO::FETCH_ASSOC);
}
?>