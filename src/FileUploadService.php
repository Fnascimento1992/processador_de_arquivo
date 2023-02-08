<?php

namespace Src;

use Src\FileService;

class FileUpload
{
    private $file;
    private $fileName;
    private $fileSize;
    private $fileExt;
    private $directory;
    private $fileService;

    public function __construct(
        $fileService = new FileService()
    )
    {
        $this->fileService = $fileService;
     
    }

    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }

    public function upload()
    {
        #code....
        $this->fileService->splitFileofLine();
        
    }    

}
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $upload = new FileUpload($file);
    /*$upload->setUploadDirectory("uploads/");
    $fileDestination = $upload->upload();
    echo "File uploaded successfully to: " . $fileDestination;*/
    var_dump($_POST['submit']);
  }
