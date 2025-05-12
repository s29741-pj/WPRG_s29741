<?php
session_start();
$form_data = $_SESSION['form_data'];
//var_dump($form_data);
//exit;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site 3</title>
</head>
<body>
    <table >
    <thead>
    <tr>
        <th>#</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Numer karty</th>
    </tr>
    </thead>
    <tbody>
    <?php for($i=0; $i<$form_data[0]['persons'][0]; $i++){ ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= htmlspecialchars($form_data[0]['name'][$i]) ?></td>
            <td><?= htmlspecialchars($form_data[0]['surname'][$i]) ?></td>
            <td><?= htmlspecialchars($form_data[0]['card'][$i]); }?></td>
        </tr>
    </tbody>
</table>
</body>
</html>
