<?php

use Core\Authenticator;

$auth = new Authenticator();
$auth->logout();

header('Location: /login');
exit;
