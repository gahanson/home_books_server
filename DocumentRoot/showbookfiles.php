<?php

function getDirContents($path) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

    $files = array(); 
    foreach ($rii as $file)
        if (!$file->isDir())
            $files[] = $file->getPathname();

    return $files;
}

// needed for CORS
header("Access-Control-Allow-Origin: *");

// assume book files directory bind mounted to document root directory
echo json_encode(getDirContents("./Books"));

?>