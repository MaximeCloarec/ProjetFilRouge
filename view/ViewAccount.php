<?php function viewAccount($body)
{
    ob_start();
?>
    <main>
        <div class="accountContainer fs-5">
            <?php echo $body?>
        </div>
    </main>
<?php
    return ob_get_clean();
}

