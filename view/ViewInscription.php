<?php function viewInscription($message)
{
    ob_start();
?>
    <main>
        <div class="loginContainer">
            <div class="loginForm">
                <h2>Inscription</h2>
                <form action="" method="post">
                    <div class="inputGroup">
                        <label for="username">Identifiant</label>
                        <input type="text" id="username" name="username" autocomplete="off" required class="usernameLogin"/>
                    </div>
                    <div class="inputGroup">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required class="passwordLogin"/>
                    </div>
                    <div class="inputGroup">
                        <label for="passwordVerification">Retaper votre mot de passe</label>
                        <input type="password" name="passwordVerification" id="password" required class="passwordLogin">
                    </div>
                    <button type="submit" class="loginButton" name="inscription">
                        Inscrire
                    </button>
                    <a class="redirection" href="/GourmetBox/Login">Déja inscrit ?</a>
                    <p class="message"><?php echo $message?></p>
                </form>
            </div>
        </div>
    </main>
<?php
    return ob_get_clean();
}
?>