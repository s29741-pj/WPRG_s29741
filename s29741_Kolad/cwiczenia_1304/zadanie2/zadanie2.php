<?php

$path = "./licznik.txt";

if (!file_exists($path)) {
    $fw = fopen($path, "w+");
    fwrite($fw, 1);
    fclose($fw);
} else if ($fr = fopen($path, "r+")) {
    if (flock($fr, LOCK_EX)) {
        $str_val = fread($fr, filesize($path));
        echo $str_val;
        $int_val = intval($str_val);
        $int_val++;
        rewind($fr);
        fwrite($fr, $int_val);
        flock($fr, LOCK_UN);
    }
    fclose($fr);
}




