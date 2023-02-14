<?php

namespace Src;

use Src\FileService;

class FileUploadService
{
    private $file;
    private $fileFormat;
    private $fileName;
    private $fileSize;
    private $fileExt;
    private $faleService;
    private $finalDir;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->fileService = new FileService();
        $this->finalDir = 'upload/';
    }

    /**
     * upload
     *
     * @param mixed file
     *
     * @return void
     */
    public function upload($file)
    {
        try {
            if (is_array($file)) {
                move_uploaded_file($file['tmp_name'], 'upload/' . $file['name'] . date('s'));
            }
        } catch (\Throwable $th) {
            throw new $th;
        }
        $this->fileService->splitFileofLine();
    }
}
