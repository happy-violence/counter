<?php
require_once __DIR__ . '/function.php';
header("content-type:image/jpeg");
$image = file_get_contents(__DIR__ . '/images/room.jpg');

if (false === $image) {
    echo '';
    exit();
}

counter();

echo $image;