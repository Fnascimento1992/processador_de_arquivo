<?php

use Src\FileUpload;

require_once('./src/FileUploadService.php');

$file = new FileUpload();
$file->upload($_FILES['file']);


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Split File</title>
</head>

<body>
    <h1>Split Files - script PHP</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

        <div class="mb-3 container">
            <label for="formFile" class="form-label">Split file to lines</label>
            <input class="form-control" type="file" name="file">

            <label for="formFile" class="form-label">Nº of lines</label>
            <input class="form-control" type="text" name="lines">
        </div>
        <div class="mb-3 container">
            <button type="submit" class="btn btn-secondary">Carregar</button>
        </div>

    </form>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>