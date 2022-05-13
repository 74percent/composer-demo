<?php

require __DIR__ . '/../vendor/autoload.php';

use app\models\User;

$user = new User();
$user->sayHello();
