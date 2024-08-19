<?php 
function coockieChecker($bdd,$cookie) {
    try{
        $req = $bdd->prepare("SELECT * FROM users WHERE rememberMe_users=?");
        $req->bindParam(1, $cookie,PDO::PARAM_STR);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e) {
        return $e->getMessage();
    }
}