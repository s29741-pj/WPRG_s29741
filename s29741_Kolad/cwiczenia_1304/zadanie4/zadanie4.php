<?php

$path = "./address-list.txt";
$ip = "127.0.0.1";

function checkIp($path, $ip)
{
    if (!file_exists($path)) {
        echo "Podany plik nie istnieje.";
    } else if ($fr = fopen($path, "r")) {
        $address_list = file($path);
        foreach ($address_list as $line) {
            if (strcmp(trim($line), trim($ip)) != 0) {
                include "basic-site.php";
            }else{
                include 'premium-site.php';
            }
            break;
        }
        fclose($fr);
    }
}
checkIp($path, $ip);



