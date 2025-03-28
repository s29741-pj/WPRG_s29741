<?php

$formVisible = "";


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

<div class="divBox <?php echo $formVisible; ?>">
    <fieldset class="outer-fieldset">
        <legend>Czy pierwsza?</legend>
        <form name="primary" action="zadanie2.php" method="POST">
            <input type="hidden" name="primary" value="Functions">
            <div class="innerDiv">
                <h3>Dane podstawowe</h3>
                <label for="guests">Podaj liczbę gości:</label>
                <select name="guests" id="guests">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <label for="name">*Imię:</label>
                <input type="text" name="name" id="name" required>
                <label for="surname">*Nazwisko:</label>
                <input type="text" name="surname" id="surname" required>
                <label for="address">*Adres:</label>
                <input type="text" name="address" id="address" required>
                <label for="card">*Numer karty kredytowej:</label>
                <input type="number" name="card" id="card" required>
                <label for="email">*Adres email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="innerDiv">
                <h3>Czas pobytu</h3>
                <label for="arrivalDate">*Data przyjazdu</label>
                <input type="date" name="arrivalDate" id="arrivalDate" required>
                <label for="arrivalHour">*Godzina przyjazdu</label>
                <input type="time" name="arrivalHour" id="arrivalHour" required>
                <label for="departureDate">*Data wyjazdu</label>
                <input type="date" name="departureDate" id="departureDate" required>
            </div>

            <fieldset class="inner-fieldset">
                <legend>Opcje dodatkowe i udogodnienia</legend>
                <ul>
                    <li>
                        <input type="checkbox" name="bed" id="bed">
                        <label for="bed">Czy potrzebna będzie dostawka?</label>
                    </li>
                    <li>
                        <input type="checkbox" name="ac" id="ac">
                        <label for="ac">Klimatyzacja</label>
                    </li>
                    <li>
                        <input type="checkbox" name="champagne" id="champagne">
                        <label for="champagne">Szampan</label>
                    </li>
                    <li>
                        <input type="checkbox" name="strawberries" id="strawberries">
                        <label for="strawberries">Truskawki</label>
                    </li>
                </ul>
            </fieldset>
            <input type="submit" name="submit" id="submit" class="submit">
        </form>

    </fieldset>
</div>

</body>
</html>
