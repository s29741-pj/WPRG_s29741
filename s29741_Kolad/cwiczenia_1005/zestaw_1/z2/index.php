<?php

session_start();

var_dump(session_id());


$session_id = session_id();

$limit = 10;

if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
} else {
    $visits = 1;
}

setcookie('visits', $visits, time() + 86400);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div><p>
            <?= "Odwiedziłeś stronę " . $_COOKIE['visits'] . " razy" ?>
        <?php if($_COOKIE['visits'] >= $limit){ echo "Odwiedziłeś stronę ponad " . $limit . " razy!";}?>
    </p></div>
</body>
</html>
