<?php
$user = new Users();
if (isset($_POST["modifier"])) {
    echo $user->getView()->setBody(viewAccount($user->getView()->modifyAccount()))->render();
    exit;
}
if (isset($_POST["valider"])) {
    echo $user->setId($_POST["valider"])->setNumberstreet($_POST["numberstreet_users"])->setName($_POST["name_users"])->setFirstName($_POST["firstname_users"])->setCity($_POST["city_users"])->setPostal($_POST["postal_users"])->updateInfo(connectionBDD());
    exit;
}
echo $user->getView()->setBody(viewAccount($user->getView()->showAccount()))->render();