<?php
if (isset($_POST["site1"])) {
    session_start();
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $card = $_POST["card"];
    $persons = $_POST["persons"];

    $form_data[] = [
        'name' => $name,
        'surname' => $surname,
        'card' => $card,
        'persons' => $persons
    ];


    var_dump($form_data);

    $_SESSION['form_data'] = $form_data;

    header("Location: site_2.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site 1</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="w-screen h-screen flex justify-center items-center">
<div class="w-80 h-70 flex flex-col">
    <form action="site_1.php" method="POST" name="site1"
          class="w-full h-full flex flex-col justify-around items-center">
        <label for="name">name:</label>
        <input id="name" type="text" name="name[]" class="border-2 border-black-500">
        <label for="surname">surname:</label>
        <input id="surname" type="text" name="surname[]" class="border-2 border-black-500">
        <label for="card">card number:</label>
        <input id="card" type="number" name="card[]" class="border-2 border-black-500">
        <label for="persons">persons</label>
        <select name="persons[]" id="persons">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value=4>4</option>
        </select>
        <input type="hidden" name="site1" value="1">
        <input type="submit" value="submit"
               class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
</div>


</body>
</html>
