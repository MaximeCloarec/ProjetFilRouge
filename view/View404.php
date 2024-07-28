<?php function view404() {
    ob_start();
    ?>
    <main>
        <h1>Coucou</h1>
    </main>
    <?php
        return ob_get_clean();
}?>