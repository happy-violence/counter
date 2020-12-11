<?php

function counter() {
    //читаем содержимое файла в строку
    $count = file_get_contents(__DIR__. '/count.txt');
    $count++;
//записываем в файл count.txt число показов картинки
    file_put_contents(__DIR__. '/count.txt', $count);
}