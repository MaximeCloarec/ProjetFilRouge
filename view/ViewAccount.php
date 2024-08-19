<?php function viewAccount()
{
    ob_start();
?>
    <main>
        <div class="compteContainer">
            <h1>Mon compte</h1>
            <img src="https://picsum.photos/200/200" alt="">
            <h3>Mes informations</h3>
            <p>Identifiant : <?php echo $_SESSION["infoTab"]["login_users"]?></p>
            <p>Nom : Exemple 1 </p>
            <p>Prenom : Exemple 2</p>
            <h3>Mes coordonnées</h3>
            <p>Ville : <?php echo $_SESSION["infoTab"]["country_users"]?></p>
            <p>Code postal : 31***</p>
            <p>Ville : Exemple</p>
            <p>Numéro de rue : Exemple 3</p>
            <?php var_dump($_SESSION["infoTab"])?>
            <a href="/GourmetBox/Deconnexion">Se déconnecter</a>
        </div>
    </main>
<?php
    return ob_get_clean();
}
