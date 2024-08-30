<?php function view404()
{
    ob_start();
?>
    <main>
        <div class="container404">
            <h1 class="title404">404 - Oups, la recette est manquante !</h1>
            <p class="subtitle404">Il semble que cette page soit encore en préparation ou qu'elle ait été mangée par un autre utilisateur.</p>
            <a href="/GourmetBox" class="btn-home404">Retour à la carte principale</a>
        </div>
    </main>
<?php
    return ob_get_clean();
} ?>