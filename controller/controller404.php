<?php
$user = new Users();
echo $user->getView()->setBody(view404())->render();
