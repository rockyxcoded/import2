<?php

set_time_limit(0); //Unlimited max execution time

$url = 'https://www.jbsfinder.com/12.tar.gz';

echo 'Starting Download!<br>';
$file = fopen ($url, "rb");

if($file) {
    $new_file = fopen (basename($url), "wb");
    if($new_file)
        while(!feof($file)) {
            fwrite($new_file, fread($file, 1024 * 8 ), 1024 * 8 );
            echo '1 MB File Chunk Written!<br>';
        }
}

if($file) {
    fclose($file);
}

if($new_file) {
    fclose($new_file);
}

echo 'Finished!';
