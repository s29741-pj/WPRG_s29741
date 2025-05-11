<?php
session_start();
$form_data = $_SESSION['form_data'];

var_dump($form_data);
exit();

if ($form_data[0]['persons'][0] == 1) {
    header("Location: site_3.php");
    exit();
}

if (isset($_POST["site2"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $card = $_POST["card"];

    

    $_SESSION['form_data'] = $form_data;

    header("Location: site_3.php");
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
    <title>Site 2</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="w-screen h-70 flex justify-center items-center">
<div class="w-80 h-70 flex flex-col">
    <form action="site_2.php" method="POST" name="site2"
          class="w-full h-full flex flex-col justify-around items-center">

        <?php for ($i = 2; $i <= $form_data[0]['persons'][0]; $i++): ?>
            <h2 class="mt-4">Person <?= $i ?></h2>
            <label for="name_<?= $i ?>">name:</label>
            <input id="name_<?= $i ?>" type="text" name="name[]" class="border-2 border-black-500">

            <label for="surname_<?= $i ?>">surname:</label>
            <input id="surname_<?= $i ?>" type="text" name="surname[]" class="border-2 border-black-500">

            <label for="card_<?= $i ?>">card number:</label>
            <input id="card_<?= $i ?>" type="number" name="card[]" class="border-2 border-black-500">
        <?php endfor; ?>

        <input type="hidden" name="site2" value="2">
        <input type="submit" value="submit"
               class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>

</div>

</body>
</html>
