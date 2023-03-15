<?php

namespace Src;

class FileDownload
{

    /**
     * listFiles
     *
     * @param mixed dir
     *
     * @return void
     */
    public function listFiles($dir)
    {

        $files = array();


        $splitDir = opendir($dir);
        while (false !== ($file = readdir($splitDir))) {
            if ($file != "." && $file != "..") {
                $files[] = $file;
            }
        }
        closedir($splitDir);

        sort($files);



        foreach ($files as $file) {
            echo "<br> <a href='$dir/$file' Download>$file</a><br>";
        }
    }
}
