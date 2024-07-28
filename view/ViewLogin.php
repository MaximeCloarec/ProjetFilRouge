<?php function viewLogin($message)
{
    ob_start();
?>
    <main>
        <div class="loginContainer">
            <div class="loginForm">
                <h2>Connexion</h2>
                <form action="" method="post">
                    <div class="inputGroup">
                        <label for="username">Identifiant</label>
                        <input type="text" id="username" name="username" autocomplete="off" required class="usernameLogin"/>
                    </div>
                    <div class="inputGroup">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required class="passwordLogin"/>
                    </div>
                    <div class="inputGroup rememberMe">
                        <input type="checkbox" id="rememberMe" name="rememberMe"/>
                        <label for="rememberMe">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="loginButton" name="login">
                        Se connecter
                    </button>
                    <a class="redirection" href="/GourmetBox/Inscription">Pas encore inscrit ?</a>
                    <p class="message"><?php echo $message?></p>
                </form>
            </div>
        </div>
    </main>
<?php
    return ob_get_clean();
}
?>