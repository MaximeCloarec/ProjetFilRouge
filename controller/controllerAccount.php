<?php
$user = new Users();
echo $user->getView()->setBody(viewAccount())->render();