<?php

chmod(__DIR__ . '/../vendor/league/oauth2-server/tests/Stubs/private.key', 0660);

if (!@include_once __DIR__ . '/../vendor/autoload.php') {
    $message = <<<MSG
You must set up the project dependencies, run the following commands:
> wget http://getcomposer.org/composer.phar
> php composer.phar install
MSG;

    exit($message);
}
