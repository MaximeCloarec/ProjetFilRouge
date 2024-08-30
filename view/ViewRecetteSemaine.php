<?php function viewRecetteSemaine()
{
    ob_start();
?>
    <main>
        <div class="weekFood">
            <div class="weekTitle">
                <h2>Les recettes à découvrir cette semaine</h2>
                <hr class="border border-danger border-2 opacity-50" />
            </div>
            <div class="weekDynamic">
                <button id="prevArrow" class="btn">
                    <img class="arrowSvg" src="img/arrow_back_24dp_FILL0_wght400_GRAD0_opsz24.svg" />
                </button>
                <div class="vr"></div>
                <h2 id="weekDates"></h2>
                <div class="vr"></div>
                <button id="nextArrow" class="btn">
                    <img class="arrowSvg" src="img/arrow_forward_24dp_FILL0_wght400_GRAD0_opsz24.svg" />
                </button>
            </div>
            <div class="foodCardContainer gx-0"></div>
        </div>
    </main>
<?php
    return ob_get_clean();
}
?>