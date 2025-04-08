<?php


if (isset($_POST["file-manager"])) {
    $path = $_POST["path"];
    $cat = $_POST["cat"];
    $operation = $_POST["operation"];
    $result = "";
    $files = "";


    function fileStructure($path, $cat, $operation)
    {
        $dir = "$path" . "$cat";

        switch ($operation) {
            case "read":
                read($dir);
                break;
            case "delete":
                delete($dir);
                break;
            case "create":
                create($path, $cat);
                break;
            default:
                read($dir);
        }
    }

    function read($dir)
    {
        global $result, $files;
        if (!is_dir($dir) || !is_readable($dir)) {
            $result = "Nie mogę otworzyć katalogu '$dir'\nKatalog nie istnieje lub nie można go odczytać.";
        } else {
            $arr = scandir($dir);
            foreach ($arr as $file) {
                if ($file !== "." && $file !== "..") {
                    $files .= "$file, ";
                }
            }
            $result = "Katalog w scieżce: $dir\nzawiera pliki:\n$files";
        }
        return $result;
    }


    function delete($dir)
    {
        global $result, $files;
        if (!is_dir($dir) || !is_readable($dir)) {
            $result = "Nie mogę usunąć katalogu: '$dir'\nKatalog nie istnieje lub nie można go odczytać.";
        } else {
            $arr = scandir($dir);
            foreach ($arr as $file) {
                if ($file !== "." && $file !== "..") {
                    $files .= "$file, ";
                }
            }
            if (empty($files)) {
                rmdir($dir);
                $result = "Katalog w ścieżce\n$dir został usunięty.";
            } else {
                $result = "Nie mogę usunąć katalogu: '$dir'\nkatalog nie jest pusty.";
            }
        }
        return $result;
    }

    function create($path, $cat)
    {
        global $result;
        if (!is_dir($path) || !is_readable($path)) {
            $result = "Nie mogę utworzyć nowego katalogu w '$path'\npodana lokalizacja nie istnieje lub nie można jej odczytać.";
        } else {
            if (is_dir($path . $cat)) {
                $result = "Nie mogę utworzyć nowego katalogu.\nW ścieżce\n" . "$path" . "$cat" . " istnieje już katalog o nazwie $cat";
            } else {
                mkdir("$path" . "$cat");
                $result = "Katalog w ścieżce\n" . "$path" . "$cat" . " został utworzony.";
            }
        }
        return $result;
    }

    fileStructure($path, $cat, $operation);

}


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 3</title>
    <link rel="stylesheet" href="./style.css">
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">

</head>

<body>

<fieldset class="divBox">
    <form action="zadanie3.php" method="POST" name="file-manager" class="divBox">
        <input type="hidden" name="file-manager" value="Functions">
        <div class="innerDiv">
            <label for="path">Ścieżka do pliku:</label>
            <input id="path" name="path" type="text" class="divBtn" pattern=".*\\$"
                   title="Ścieżka powinna kończyć się znakiem \" required>
        </div>
        <div class="innerDiv">
            <label for="cat">Nazwa katalogu:</label>
            <input id="cat" name="cat" type="text" class="divBtn" required>
        </div>
        <div class="innerDiv">
            <label for="operation">Wybierz operację dla podanego katalogu:</label>
            <select name="operation" id="operation" class="divBtn">
                <option value="read">Odczyt</option>
                <option value="delete">Usunięcie</option>
                <option value="create">Utworzenie</option>
            </select>
        </div>
        <div class="innerDiv">
            <label for="result">Wynik:</label>
            <textarea id="result" name="result" class="divBtn" readonly rows="6"
                      cols="80"><?php echo isset($result) ? $result : ""; ?></textarea>
        </div>
        <div class="innerDiv">
            <input type="submit" value="Wykonaj" id="submit" class="submit">
        </div>
    </form>
</fieldset>


</body>

</html>
