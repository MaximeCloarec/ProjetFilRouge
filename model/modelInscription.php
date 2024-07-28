<?php function inscription($bdd, $login, $password)
{
    try {
        $req = $bdd->prepare('INSERT INTO users (login_users,password_users) VALUES (?,?)');
        $req->bindParam(1, $login, PDO::PARAM_STR);
        $req->bindParam(2, $password, PDO::PARAM_STR);
        $req->execute();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

?>

<?php function loginDuplicate($bdd, $login)
{
    try {
        $req = $bdd->prepare('SELECT login_users FROM users WHERE login_users=?');
        $req->bindParam(1, $login, PDO::PARAM_STR);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
?>