<?php

namespace Src;

class FileService
{
    /**
     * @var mixed filename
     */
    private $filename;

    /**
     * @var mixed sufix
     */
    private $sufix;

    private $fileTemp;



    /**
     * moveFile
     *
     * @return void
     */
    public function moveFile()
    {
        $uploadDirectory = 'upload/';

        if (!$uploadDirectory) {
            printf("Não foi possível abrir o diretório $uploadDirectory");
        }

        $uploadFiles = scandir($uploadDirectory);

        foreach ($uploadFiles as $uploadFile) {
            if (substr($uploadFile, 0, 1) == '.') {
                // continue;
            }
            #  $filePath = $uploadDirectory . $uploadFile;

            #  echo "Caminho completo: " . $filePath . "<br><hr>";
        }
    }

    /**
     * splitFile
     *
     * @return void
     */
    public function splitFileofLine()
    {
        #code...
        # echo "<hr>Método de Split por Linhas";
    }

    /**
     * splitFileOfSize
     *
     * @return void
     */
    public function splitFileOfSize()
    {
        echo "Método de Split por tamanho";
    }
}
