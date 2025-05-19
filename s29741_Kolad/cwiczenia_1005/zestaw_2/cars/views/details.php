<?php
if (isset($_POST['details_view'])) {
    header("Location: ../index.php");
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
    <title>Car details</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="w-screen h-screen flex justify-center items-center bg-gray-100">
<div>
    <h1>Car details</h1>
    <div class="p-4">
        <?php echo "Selected car id: " . $_GET['selectedId'] . '<br>'  ?>
        <?php echo "Selected car brand: " . $_GET['brand'] . '<br>'   ?>
        <?php echo "Selected car model: " . $_GET['model'] . '<br>'   ?>
        <?php echo "Selected car price: " . $_GET['price'] . '<br>'   ?>
        <?php echo "Selected car year: " . $_GET['year'] . '<br>'   ?>
        <?php echo "Selected car description: " . $_GET['description'] . '<br>' ?>
    </div>
    <form action="details.php" method="POST" class="flex justify-center items-center">
        <input name="details_view" type="submit"
               class="bg-cyan-500 hover:bg-cyan-400 text-white font-bold py-2 px-4 border-b-4 border-cyan-700 hover:border-cyan-500 rounded"
               value="Powrót">
    </form>
</div>


</body>
</html>
