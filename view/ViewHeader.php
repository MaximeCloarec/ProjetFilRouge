<?php
function viewHeader($message)
{

    ob_start();
?>
    <!DOCTYPE html>
    <html lang="fr" data-theme="light">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gourmetbox</title>
        <link rel="stylesheet" href="style/style.css" />
        <script src="./script/index.js" defer></script>
        <script src="./script/food.js" defer></script>
        <meta name="description" content="Votre site de meal Kit près de chez vous" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid" id="container-fluid">
                    <a class="navbar-brand fs-2">GourmetBox</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/GourmetBox/">Accueil</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Page Recette
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/GourmetBox/RecetteSemaine">Recettes de la semaine</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="page/touteRecettes.html">Toute nos recettes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="page/lesKitsRepas.html">Les kits repas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="page/commentCaMarche.html">Comment ça marche ?</a>
                            </li>
                            <li class="nav-item webHide">
                                
                                <a class="nav-link" href=<?php echo $message?>>Connexion</a>
                            </li>
                            <li class="nav-item webHide">
                                <a class="nav-link" href="page/panier.html">Mon panier</a>
                            </li>
                        </ul>
                        <div class="navIcones justify-content-end" id="navIcones">
                            <a class="icon" href=<?php echo $message?>><img class="iconImg" src="img/account_circle.svg" alt="connexion button" />
                            </a>
                            <a class="icon" href="page/panier.html"><img class="iconImg" src="img/shopping_cart.svg" alt="account button" />
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    <?php
    return ob_get_clean();
}
    ?>