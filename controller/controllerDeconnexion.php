<?php
session_destroy();
setcookie('rememberMe', '', -1, '/'); 
$user = new Users();
echo $user->getView()->setBody(viewdeconnexion())->render();