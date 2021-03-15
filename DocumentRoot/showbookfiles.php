<?php

function getDirContents($path) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

    $files = array(); 
    foreach ($rii as $file)
        if (!$file->isDir())
            $files[] = $file->getPathname();

    return $files;
}

header("Access-Control-Allow-Origin: *");

echo json_encode(getDirContents("./Books"));

?>