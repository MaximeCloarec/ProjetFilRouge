<?php
function viewFooter()
{

    ob_start();
?>

    <footer>
        <div class="containerFooter">
            <img class="logo" src="img/package.svg" alt="package logo" />
            <div class="pageLink">
                <div class="listLink">
                    <h3 class="titleLink">Page Recette</h3>
                    <ul>
                        <a href="page/recettesSemaine.html">
                            <li>Recettes de la semaine</li>
                        </a>
                        <a href="page/touteRecettes.html">
                            <li>Toutes nos recettes</li>
                        </a>
                    </ul>
                </div>
                <a href="page/lesKitsRepas.html">
                    <h3 class="titleLink">Les kits repas</h3>
                </a>
                <a href="page/commentCaMarche.html">
                    <h3 class="titleLink">Comment ça marche ?</h3>
                </a>
            </div>
            <div class="socialLink">
                <h3>Rejoignez nos réseaux sociaux !</h3>
                <div class="socialIcon">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="img/icons8-facebook.svg" alt="Facebook logo" /></a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <img src="img/icons8-instagram.svg" alt="Instagram logo" /></a>
                    <a href="https://www.tiktok.com/" target="_blank">
                        <img src="img/icons8-tiktok.svg" alt="Tiktok logo" /></a>
                    <a href="https://twitter.com/" target="_blank">
                        <img src="img/icons8-twitter.svg" alt="Twitter logo" /></a>
                </div>
            </div>
        </div>
    </footer>
    </body>

    </html>
<?php
    return ob_get_clean();
}
?>