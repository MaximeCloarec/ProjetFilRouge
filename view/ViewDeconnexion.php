<?php function viewDeconnexion()
{
    ob_start();
?>
    <main>
        <div class="container">
            <h3>Vous êtes bien déconnecté, vous allez être redirigé vers la page d'accueil</h3>
        </div>
    </main>
    <script>
        setTimeout(function() {
            window.location.href = "/GourmetBox/";
        }, 4000);
    </script>
<?php

    return ob_get_clean();
}