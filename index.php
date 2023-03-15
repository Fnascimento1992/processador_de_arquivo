<?php
header("Cache-Control: no-cache, must-revalidate");
require __DIR__ . "/vendor/autoload.php";


use Src\ManangerService;

$upload = new ManangerService();

$upload->view();
