<?php

namespace App\Services;

class ReadFiles
{ 
  public function Read(): string  {
    $path = __DIR__ . '/../transaction_files'; 
    $files = scandir($path);
    
    return $content = file_get_contents($path . '/' . $files[2]);
  }
}




