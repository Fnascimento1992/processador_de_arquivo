<?php

namespace Src;

use Src\FileService;

class FileUpload
{
    private $file;
    private $fileFormat = ['text/plain'];
    private $fileName;
    private $fileSize;
    private $fileExt;

    public function __construct()
    {
        #code...  
    }

    public function upload($file)
    {
        if (is_array($file)) {
            move_uploaded_file($file['tmp_name'], 'upload/' . $file['name']);
        } else {
            die("Error");
        }
    }
}
