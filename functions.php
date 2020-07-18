<?php

function createFile($file_name) {
    return fopen("created/" . $file_name, 'w');
}

function addContentToFile($file, $content) {
    return fwrite($file, $content);
    fclose($file);
}