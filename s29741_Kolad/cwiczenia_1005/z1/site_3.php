<?php
session_start();
$form_data = $_SESSION['form_data'];
var_dump($form_data);
exit;
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
    <?php foreach ($form_data as $index => $person): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= htmlspecialchars($person['name']) ?></td>
            <td><?= htmlspecialchars($person['surname']) ?></td>
            <td><?= htmlspecialchars($person['card']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
