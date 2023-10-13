<?php

namespace Src;

class FileService
{
    private string $dirSplit;
    private string $uploadDir;
    private string $lines;

    /**
     * @param $dirSplit
     * @param $lines
     */
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
    public function split(): void
    {
        $nameFile = $this->listFile($this->uploadDir);
        $splitFile = fopen($this->uploadDir . $nameFile, 'r');
        $f = 1;
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
     * @return string
     */
    public function listFile($dir): string
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
