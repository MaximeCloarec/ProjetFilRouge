<?php function sanitize($data)
{
    return htmlentities(strip_tags(stripslashes(trim($data))));
}
?>

<?php function connectionBDD()
{
    return new PDO('mysql:host=localhost;dbname=gourmetbox', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
?>