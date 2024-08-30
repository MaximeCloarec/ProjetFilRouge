<?php
$user = new Users();
echo $user->getView()->setBody(viewIndex())->render();
var_dump($_POST);
