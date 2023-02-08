<?php

require __DIR__ ."/../vendor/autoload.php";


use Src\FileService;

echo "Começo da aplicação";
echo "<br>";
echo "<br>";
 /*-------------------------------------------*/
require_once __DIR__."/../src/views/home.php";


 /*-------------------------------------------*/


$file = new FileService();



//$file->splitFileofLine();



//$file->splitFileOfSize();
