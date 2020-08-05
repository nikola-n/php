<?php

function directoryReader($directory, array $excludeFiles = ['.', '..'])
{
    $files = [];

    //do some checks
    if ( ! is_dir($directory)) {
        return null;
    }

    if ( ! ($filesDirectory = opendir($directory))) {
        return null;
    }
    //loop thorough the files
    while (($file = readdir($filesDirectory)) !== false) {
        //if any of the looped files matches the excluded files continue and
        //append the other files
        if (in_array($file, $excludeFiles)) {
            continue;
        }
        //add to $images
        $files[] = $directory . '/' . $file;

    }
    closedir($filesDirectory);
    //return images
    return $files;
}