<?php function viewIndex()
{
    ob_start();
?>
    <main>
        <section class="mainImage">
            <article class="mainImageText">
                <h2>
                    Découvrez l'exquise simplicité avec GourmetBox ! <br />
                    Votre passeport vers une expérience culinaire
                    inoubliable
                </h2>
            </article>
        </section>
        <section class="mainPourquoi">
            <h2>
                Tellement délicieux et simple !<br />
                Comment ca marche ?
            </h2>
            <div class="carteContainer">
                <article class="carte">
                    <img
                        src="img/orders_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="box image" />
                    <p>
                        Choisissez vos plats parmi une large sélection
                        changeante toutes les semaines !
                    </p>
                </article>
                <article class="carte">
                    <img
                        src="img/grocery_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="food image" />
                    <p>
                        Nos agriculteurs et chefs partenaire donne le
                        meilleurs pour vous proposer des produits et plats
                        de qualité
                    </p>
                </article>
                <article class="carte">
                    <img
                        src="img/local_shipping_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="van image" />
                    <p>
                        Faites vous livrer quand et où vous voulez ! Gérer
                        votre abonnement comme vous le désirez !
                    </p>
                </article>
            </div>
        </section>
        <div class="comContainer">
            <h2>
                Pas encore convaincu ?<br />
                Regardez ce que disent ceux qui ont déjà essayé !
            </h2>
            <div class="comCardContainer">
                <div class="comCard">
                    <h4>Philippe L.</h4>
                    <!-- <p>&#11088 &#11088 &#11088 &#11088 &#11088</p> -->
                    <p>
                        GourmetBox a dépassé mes attentes ! Des repas
                        délicieux, faciles à préparer et des ingrédients de
                        qualité. 5 étoiles !
                    </p>
                </div>
                <div class="comCard">
                    <h4>Laurine T.</h4>
                    <!-- <p>&#11088 &#11088 &#11088 &#11088 &#11088</p> -->
                    <p>
                        GourmetBox a rendu mes repas tellement savoureux !
                        Les ingrédients et les recettes ont transformé
                        chaque repas en une expérience exceptionnelle.
                    </p>
                </div>
                <div class="comCard">
                    <h4>Thibault V.</h4>
                    <!-- <p>&#11088 &#11088 &#11088 &#11088 &#11088</p> -->
                    <p>
                        GourmetBox a vraiment révolutionné la façon dont je
                        cuisine. Les plats sont non seulement délicieux mais
                        aussi rapides et faciles à préparer.
                    </p>
                </div>
            </div>
        </div>
        <div id="newsLetter" class="newsLetter sticky-bottom hide">
            <div class="newsLetterImgContainer">
                <img
                    class="letter"
                    src="img/mail_FILL0_wght400_GRAD0_opsz24.svg"
                    alt="Letter Image" />
            </div>
            <div class="newsLetterContainer">
                <h4>
                    Inscrivez vous a notre newsletter pour ne rien rater
                    !<br />
                    Economisez jusqu'a 25% sur votre première semaine !
                </h4>
                <form class="newsLetterForm" name="newsLetter" method="post">
                    <input
                        name="newsLetterEmail"
                        placeholder="Mon adresse e-mail"
                        type="email"
                        required />
                    <button name="email">Accepter</button>
                </form>
            </div>
            <div class="newsLetterContainerButton">
                <button
                    id="close"
                    class="newsLetterClose"
                    title="Close Newsletter"></button>
            </div>
        </div>
    </main>
<?php
    return ob_get_clean();
} ?>