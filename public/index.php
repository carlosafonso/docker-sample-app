<?php

require __DIR__ . '/../vendor/autoload.php';

$env = getenv('ENV') ?: null;
$foo = getenv('FOO') ?: null;
$bar = getenv('BAR') ?: null;

require __DIR__ . '/../views/view.php';
