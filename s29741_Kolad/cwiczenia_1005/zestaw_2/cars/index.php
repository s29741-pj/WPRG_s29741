<?php
if (!$db_link = mysqli_connect('localhost', 'root', '', 'samochody_db_wprg')) {
    mysqli_close($db_link);
    exit('Wystąpł błąd podczas próby połączenia z serwerem MySQL...<br/>');
}
if (!mysqli_select_db($db_link, 'samochody_db_wprg')) {
    echo 'Błąd wyboru bazy danych...<br/>';
    mysqli_close($db_link);
}
function toggle_view()
{
    global $switch_view;
    $switch_view = !$switch_view;
}
$query_main = mysqli_query($db_link, "SELECT `id`, `marka`, `model`, `cena`, `rok`, `opis` FROM `samochody` ORDER BY `cena` ASC LIMIT 5");
$query_all = mysqli_query($db_link, "SELECT `id`, `marka`, `model`, `cena`, `rok`, `opis` FROM `samochody` ORDER BY `rok` DESC");

//mysqli_close($db_link);

//echo mysqli_fetch_row($query_main)[5];
//exit();


//INSERT INTO `samochody`(`marka`, `model`, `cena`, `rok`, `opis`) VALUES ('Seat','Ibiza','9500.00','1990','opis')

if (isset($_POST['add_car'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $description = $_POST['description'];

    $query = "INSERT INTO `samochody`(`marka`, `model`, `cena`, `rok`, `opis`) VALUES ('$brand','$model','$price','$year','$description')";

    if (!$result = mysqli_query($db_link, $query)) {
//        mysqli_close($db_link);
        exit('Błąd podczas dodawania nowego rekordu...<br/>');
    }else{
        echo '<script>alert("Nowy samochód został dodany")</script>';
    }
}

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
    <form action="index.php" method="POST">
        <input name="view" type="submit"
               class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
               value="Strona główna">
        <input name="view" type="submit"
               class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
               value="Wszystkie samochody">
        <input name="view" type="submit"
               class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
               value="Dodaj samochód">
    </form>

</div>

<table>
    <tr>
        <?php if (isset($_POST['view'])) {
            if ($_POST['view'] == 'Strona główna' || $_POST['view'] == 'Wszystkie samochody') {
                echo '<th>id</th>';
                echo '<th>marka</th>';
                echo '<th>model</th>';
                echo '<th>cena</th>';
            }
        }?>
        <?php if (isset($_POST['view'])) {
            if ($_POST['view'] == 'Wszystkie samochody') {
                echo '<th>rok</th>';
            }
        } ?>
    </tr>

    <?php
        if (isset($_POST['view'])) {
        switch ($_POST['view']) {
            case 'Strona główna':
                include 'views/main_page.php';
                break;
            case 'Wszystkie samochody':
                 include 'views/all_cars.php';
                break;
            case 'Dodaj samochód':
                 include 'views/add_car.php';
                break;
        }
    }else {
            include 'views/main_page.php';
        }

    ?>


</table>

</body>
</html>
