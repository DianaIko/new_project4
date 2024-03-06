<?php

    $FILES = 'files';
    $FILES_N = 'files_new';
    include './functions/translit.php';
    include './functions/getfiles.php';
    include './functions/deletesymbols.php';
    include './functions/copy.php';

    $files = getfiles($FILES);

    $new_files = [];
    foreach ($files as $file) {
        $new_files[$file] = translit($file);

    }
    $new_files_clear = [];


    foreach ($new_files as $key => $file){
        $new_files_clear[$key] = deletesymbols($file);
        copy_file($key, $file);
    }

    print_r($new_files_clear);



