<?php

require __DIR__ ."/../vendor/autoload.php";


use Src\FileService;

echo "Começo da aplicação";

 /*-------------------------------------------*/

$file = new FileService();

echo "<hr>";

$file->splitFileofLine();

echo "<hr>";


$file->splitFileOfSize();
