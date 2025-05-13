<?php
if (!$db_link = mysqli_connect('localhost', 'root', '', 'samochody_db_wprg')) {
    exit('Wystąpł błąd podcxas próby połączenia z serwerem MySQL...<br/>');
}

if (!mysqli_select_db($db_link, 'samochody_db_wprg')) {
    echo 'Błąd wyboru bazy danych...<br/>';
}

//$query = "SELECT * FROM samochody";

$query_main = "SELECT `marka`, `model`, `cena` FROM `samochody` ORDER BY `cena` ASC LIMIT 5";
$result = mysqli_query($db_link, $query_main);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 h-screen w-screen flex flex-col justify-start items-center">
<div class="w-[60%] h-20 flex flex-row justify-around items-center">
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Strona główna
    </button>
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Wszytkie samochody
    </button>
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Dodaj samochód
    </button>
</div>

<table>
    <tr>
        <th>marka</th>
        <th>model</th>
        <th>cena</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['marka'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['cena'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
