<?php

namespace Src;

class FileService
{
    private $dirSplit;
    private $uploadDir;
    private $lines;

    public function __construct($dirSplit, $lines)
    {
        $this->dirSplit = $dirSplit;
        $this->uploadDir = 'src/uploads/';
        $this->lines = $lines;
    }

    /**
     * split
     *
     * @return void
     */
    public function split()
    {
        $nameFile = $this->listFile($this->uploadDir);
        $splitFile = fopen($this->uploadDir . $nameFile, 'r');
        $f = "splitA" . 1;
        while (!feof($splitFile)) {
            $newfile = fopen($this->dirSplit . $f . '.txt', 'w');
            for ($i = 1; $i <= $this->lines; $i++) {
                $import = fgets($splitFile);
                fwrite($newfile, $import);
                if (feof($splitFile)) {
                    break;
                }
            }
            fclose($newfile);
            $f++;
        }
        fclose($splitFile);
    }


    /**
     * listFile
     *
     * @param mixed dir
     *
     * @return void
     */
    public function listFile($dir)
    {
        $files = scandir($dir, SCANDIR_SORT_DESCENDING);
        foreach ($files as $file) {
            if (!in_array($file, array('.', '..'))) {
                return $file;
            }
        }
        return "";
    }
}
