<?php

namespace Src;

use Src\FileService;

class FileUploadService
{

    private $finalDir;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->finalDir = __DIR__ . '/uploads/';
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
                move_uploaded_file($file['tmp_name'], $this->finalDir . $file['name']);
            }
        } catch (\Throwable $th) {
            throw new $th;
        }
    }
}
