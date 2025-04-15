<?php
if (isset($_POST["file-manager"])) {
    $path = $_POST["path"];
    $arr = file($path);
    $reverse = array_reverse($arr);

    if (!$fd = @fopen($path, "r+")) {
        echo("Nie mogę otworzyć pliku" . $path);
    } else {
        foreach ($reverse as $key => $value) {
            fwrite($fd, $value);
            echo nl2br($value);
        }
        fclose($fd);
    }
}


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

<fieldset class="divBox">
    <form action="zadanie1.php" method="POST" name="file-manager" class="divBox">
        <input type="hidden" name="file-manager" value="Functions">
        <div class="innerDiv">
            <label for="path">Ścieżka do pliku:</label>
            <input id="path" name="path" type="file" class="divBtn" required>
        </div>
        <div class="innerDiv">
            <input type="submit" value="Wykonaj" id="submit" class="submit">
        </div>
    </form>
</fieldset>


</body>

</html>
