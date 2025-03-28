<?php

$formVisible = "";
$primaryVisible = "hidden";
$isPrimary = false;
$loop1 = 0;
$loop2 = 0;
$loop3 = 0;

if (isset($_POST['primary'])) {
    $number = $_POST['number'];

    function checkIfPrimal($number) {
        global $isPrimary, $loop1, $loop2, $loop3, $primaryVisible;

        if ($number <= 1) {
            $isPrimary = false;
            return;
        }

        for ($i = 2; $i <= $number; $i++) {
            $loop1+=1;
            if ($number % $i === 0) {
                $isPrimary = false;
                break;
            }
            $isPrimary = true;
        }

        for ($i = 2; $i <= $number/2; $i++) {
            $loop2+=1;
            if ($number % $i === 0) {
                $isPrimary = false;
                break;
            }
            $isPrimary = true;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            $loop3 += 1;
            if ($number % $i === 0) {
                $isPrimary = false;
                break;
            }
            $isPrimary = true;
        }

        $primaryVisible = "";
    }
    checkIfPrimal($number);
}


?>


<!---->
<!--Czy dana liczba jest liczbą pierwszą?-->
<!--a. stwórz formularz z miejscem na wpisanie liczby-->
<!--b. stwórz skrypt PHP, który przyjmie liczbę z formularza (sprawdzi czy to na-->
<!--pewno liczba całkowita dodatnia), a następnie wywoła funkcję,-->
<!--sprawdzającą czy liczba jest liczbą pierwszą-->
<!--c. w swoim programie umieść zmienną, która policzy wszystkie iteracje pętli,-->
<!--potrzebne do wykonania obliczeń. Spróbuj tak zmodyfikować program, by-->
<!--było potrzeba jak najmniej iteracji (przy zachowaniu prawidłowego-->
<!--działania).-->
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
<!--tu stop 27.03 dodać logikę-->

<div class="divBox <?php echo $formVisible; ?>">
    <fieldset class="outer-fieldset">
        <legend>Czy pierwsza?</legend>
        <form name="primary" action="zadanie4.php" method="POST">
            <input type="hidden" name="primary" value="Functions">
            <div class="innerDiv">
                <label for="card">Sprawdzana liczba:</label>
                <input type="number" name="number" id="card" required>
            </div>
            <div class="innerDiv">
                <div class="summary-details"><p>czy pierwsza?</p>
                    <p class="<?php echo $primaryVisible ?>"
                       style="color: <?= $isPrimary ? 'green' : 'red' ?>; text-transform: uppercase;">
                        <?= $isPrimary ? 'tak' : 'nie' ?>
                    </p></div>
                <h4>iteracje</h4>
                <div class="summary-details"><p>od 2 do n</p>
                    <p><?php echo $loop1 ?></p></div>
                <div class="summary-details"><p>do n/2</p>
                    <p><?php echo $loop2 ?></p></div>
                <div class="summary-details"><p>od 2 do &Sqrt;n</p>
                    <p><?php echo $loop3 ?></p></div>
            </div>
            <input type="submit" name="submit" id="submit" class="submit">
        </form>
    </fieldset>
</div>
</body>
</html>
