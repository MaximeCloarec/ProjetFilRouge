<?php function viewAccount($body)
{
    ob_start();
?>
    <main>
            <?php echo $body?>
    </main>
<?php
    return ob_get_clean();
}

