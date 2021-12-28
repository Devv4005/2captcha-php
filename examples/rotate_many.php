<?php

set_time_limit(130);

require(__DIR__ . '/../src/autoloader.php');

$solver = new \TwoCaptcha\TwoCaptcha('c465a647d34f18a45db5dccf683e9b63');

try {
    $result = $solver->rotate([
        __DIR__ . '/images/rotate.jpg',
        __DIR__ . '/images/rotate_2.jpg',
        __DIR__ . '/images/rotate_3.jpg',
    ]);
} catch (\Exception $e) {
    die($e->getMessage());
}

die('Captcha solved: ' . $result->code);
