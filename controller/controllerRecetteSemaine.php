<?php
$user = new Users();
echo $user->getView()->setBody(viewRecetteSemaine())->render();