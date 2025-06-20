<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Services\ReadFiles as ReadFiles;

$fileContent = new ReadFiles();

echo $fileContent->Read();

