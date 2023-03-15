<?php

use Src\FileDownload;
use Src\FileService;
use Src\FileUploadService;


$file = new FileUploadService();
$file->upload($_FILES['file']);
$fileDownload = new FileDownload();

if (($lines = $_POST['lines'])) {
    $split = new FileService('src/split/', $lines);
    $split->split();
    $fileDownload->listFiles('src/split/');
} else {
    die('Informe os campos');
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Split File</title>
</head>

<body>
    <h1>Split Files - script PHP</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

        <div>
            <label for="formFile">Split file to lines</label>
            <input type="file" name="file">
            <br>
            <label for="formFile">Nº of lines</label>
            <input type="text" name="lines">
        </div>
        <div>
            <button type="submit">Split</button>
        </div>

    </form>





</body>

</html>