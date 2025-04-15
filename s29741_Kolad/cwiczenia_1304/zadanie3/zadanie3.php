<?php

//dane wyciągnąć z pliku tekstowego podzielić i wyświetlić w tabelce html

$path = "./dane.csv";

function read_csv($path)
{
    $fr = fopen($path, "r");
    $headers = fgetcsv($fr,1000,",");
    echo "<table>";
    echo "<tr>";
    echo "<th>". $headers[0] . " " . "</th>";
    echo "<th>". $headers[1] . " " ."</th>";
    echo "</tr>";

    while (($line = fgetcsv($fr, 1000, ",")) !== false){
        echo "<tr><td><a href='" . $line[0] . "'>" . $line[0] . "</a></td><td>" . $line[1] . "</td></tr>";

    }
    echo "</table>";
    fclose($fr);
}

read_csv($path);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 1</title>
    <link rel="stylesheet" href="./style.css">
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">

</head>

<body>




</body>

</html>



