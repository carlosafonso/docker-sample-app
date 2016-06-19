<?php

require __DIR__ . '/../vendor/autoload.php';

$env = getenv('ENV') ?: null;
$foo = getenv('FOO') ?: null;
$bar = getenv('BAR') ?: null;

$info = json_decode(json_encode(['tag' => null, 'commit' => null, 'build' => null]));
if (file_exists(__DIR__ . '/../info.json')) {
    $info = json_decode(file_get_contents(__DIR__ . '/../info.json'));
}

require __DIR__ . '/../views/view.php';
