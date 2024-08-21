<?php 
function coockieChecker($bdd,$cookie) {
    try{
        $req = $bdd->prepare("SELECT id_users,login_users,numberstreet_users,city_users,postal_users,country_users,name_users,firstname_users FROM users WHERE rememberMe_users=?");
        $req->bindParam(1, $cookie,PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }catch(PDOException $e) {
        return $e->getMessage();
    }
}