<?php

namespace Src;

use Src\FileUploadService;

class ManangerService
{


   /**
    * view
    *
    * @return void
    */
   public function view(): void
   {
      include_once('./src/view/upload.php');
   }
}
