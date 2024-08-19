<?php function viewAccount()
{
    ob_start();
?>
    <main>
        <div class="accountContainer fs-5">
            <div class="accountHead">
                <h2 class="fs-1">Mon compte</h2>
                <img class="accountImg" src="https://picsum.photos/200/200" alt="">
                <p class="fs-2"><?php echo $_SESSION["infoTab"]["login_users"] ?></p>
                <p class="fs-2"><?php echo $_SESSION["infoTab"]["name_users"] . " " . $_SESSION["infoTab"]["firstname_users"] ?> </p>
            </div>
            <div class="accountBody">
                <h3 class="fw-bold">Mes coordonnées</h3>
                <p>Pays : <?php echo $_SESSION["infoTab"]["country_users"] ?></p>
                <p>Code postal : <?php echo $_SESSION["infoTab"]["postal_users"] ?></p>
                <p>Ville : <?php echo $_SESSION["infoTab"]["city_users"] ?></p>
                <p>Numéro de rue : <?php echo $_SESSION["infoTab"]["numberstreet_users"] ?></p>
                <div class="accountAction">
                    <button onclick="redirection()" class="accountDeconnexion fs-4" href="/GourmetBox/Deconnexion">Se déconnecter</button>
                    <button class="accountModify fs-4" formmethod="post" type="submit" value="<?php echo $_SESSION["infoTab"]["id_users"]?>" name="modifier">Modifier Information</button>
                </div>
            </div>
        </div>
    </main>
<?php
    return ob_get_clean();
}
