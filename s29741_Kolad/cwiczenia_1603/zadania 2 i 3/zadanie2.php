<?php
$formVisible = "";
$guestsForm = "hidden";
$summaryVisible = "hidden";

$guests = 0;
$guestTwoVisible = "hidden";
$guestThreeVisible = "hidden";
$guestFourVisible = "hidden";

$g2Empty = "hidden";
$g3Empty = "hidden";
$g4Empty = "hidden";

$name = "";

if (isset($_POST['reservation'])) {
    $guests = $_POST['guests'];

    switch ($guests) {
        case 2:
            $formVisible = "hidden";
            $guestTwoVisible = "";
            $guestsForm = "";
            break;
        case 3:
            $formVisible = "hidden";
            $guestTwoVisible = "";
            $guestThreeVisible = "";
            $guestsForm = "";
            break;
        case 4:
            $formVisible = "hidden";
            $guestTwoVisible = "";
            $guestThreeVisible = "";
            $guestFourVisible = "";
            $guestsForm = "";
            break;
        default:
            $formVisible = "hidden";
            $summaryVisible = "";
    }
}

if (isset($_POST['guestsForm'])) {
    $guestsForm = "hidden";
    $formVisible = "hidden";
    $summaryVisible = "";
//reservation
    $guests = $_POST['guests'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $card = $_POST['card'];
    $email = $_POST['email'];
    $arrivalDate = $_POST['arrivalDate'];
    $arrivalHour = $_POST['arrivalHour'];
    $departureDate = $_POST['departureDate'];
    $bed = isset($_POST['bed']);
    $ac = isset($_POST['ac']);
    $champagne = isset($_POST['champagne']);
    $strawberries = isset($_POST['strawberries']);
    $submit = $_POST['submit'];
//guests

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($guestTwoVisible)){
            if (empty($_POST['g2name']) || empty($_POST['g2surname']) || empty($_POST['g2address']) || empty($_POST['g2email'])) {
                echo "<p style='color: red;'>Wypełnij wszystkie pola!</p>";
            }
        }
        if(!empty($guestThreeVisible)){
            if (empty($_POST['g2name']) || empty($_POST['g2surname']) || empty($_POST['g2address']) || empty($_POST['g2email'])) {
                echo "<p style='color: red;'>Wypełnij wszystkie pola!</p>";
            }
        }
        if(!empty($guestFourVisible)){
            if (empty($_POST['g2name']) || empty($_POST['g2surname']) || empty($_POST['g2address']) || empty($_POST['g2email'])) {
                echo "<p style='color: red;'>Wypełnij wszystkie pola!</p>";
            }
        }
    }

    $nameGTwo = $_POST['g2name'];
    $surnameGTwo = $_POST['g2surname'];
    $addressGTwo = $_POST['g2address'];
    $emailGTwo = $_POST['g2email'];
    $g2 = [$nameGTwo, $surnameGTwo, $addressGTwo, $emailGTwo];

    $nameGThree = $_POST['g3name'];
    $surnameGThree = $_POST['g3surname'];
    $addressGThree = $_POST['g3address'];
    $emailGThree = $_POST['g3email'];
    $g3 = [$nameGThree, $surnameGThree, $addressGThree, $emailGThree];

    $nameGFour = $_POST['g4name'];
    $surnameGFour = $_POST['g4surname'];
    $addressGFour = $_POST['g4address'];
    $emailGFour = $_POST['g4email'];
    $g4 = [$nameGFour, $surnameGFour, $addressGFour, $emailGFour];


//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        if(!empty($guestTwoVisible)){
//            if (empty($_POST['g2name']) || empty($_POST['g2surname']) || empty($_POST['g2address']) || empty($_POST['g2email'])) {
//                echo "<p style='color: red;'>Wypełnij wszystkie pola!</p>";
//            }
//        }
//        if(!empty($guestThreeVisible)){
//            if (empty($_POST['g3name']) || empty($_POST['g3surname']) || empty($_POST['g3address']) || empty($_POST['g3email'])) {
//                echo "<p style='color: red;'>Wypełnij wszystkie pola!</p>";
//            }
//        }
//        if(!empty($guestFourVisible)){
//            if (empty($_POST['g4name']) || empty($_POST['g4surname']) || empty($_POST['g4address']) || empty($_POST['g4email'])) {
//                echo "<p style='color: red;'>Wypełnij wszystkie pola!</p>";
//            }
//        }
//    }

    foreach ($g2 as $index => $var) {
        if (!empty($var)) {
            $g2Empty = "";
        }
    }
    foreach ($g3 as $index => $var) {
        if (!empty($var)) {
            $g3Empty = "";
        }
    }
    foreach ($g4 as $index => $var) {
        if (!empty($var)) {
            $g4Empty = "";
        }
    }
}
?>


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

<!--initial form-->
<div class="divBox <?php echo $formVisible; ?>">
    <fieldset class="outer-fieldset">
        <legend>Formularz rezerwacji</legend>
        <form name="reservation" action="zadanie2.php" method="POST">
            <input type="hidden" name="reservation" value="Functions">
            <small class="red">Pola oznaczone symbolem * są obowiązkowe.</small>
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

<!--if more than 1 person selected-->
<div class="divBox <?php echo $guestsForm; ?>">
    <form name="guestsForm" action="zadanie2.php" method="POST">
        <input type="hidden" name="guestsForm" value="Functions">
        <input type="hidden" name="guests"
               value="<?= htmlspecialchars($_POST['guests']) ?>">
        <input type="hidden" name="name"
               value="<?= htmlspecialchars($_POST['name']) ?>">
        <input type="hidden" name="surname"
               value="<?= htmlspecialchars($_POST['surname']) ?>">
        <input type="hidden" name="address"
               value="<?= htmlspecialchars($_POST['address']) ?>">
        <input type="hidden" name="card"
               value="<?= htmlspecialchars($_POST['card']) ?>">
        <input type="hidden" name="email"
               value="<?= htmlspecialchars($_POST['email']) ?>">
        <input type="hidden" name="arrivalDate"
               value="<?= htmlspecialchars($_POST['arrivalDate']) ?>">
        <input type="hidden" name="arrivalHour"
               value="<?= htmlspecialchars($_POST['arrivalHour']) ?>">
        <input type="hidden" name="departureDate"
               value="<?= htmlspecialchars($_POST['departureDate']) ?>">
        <?php if (!empty($_POST['bed'])): ?>
            <input type="hidden" name="bed" value="1">
        <?php endif; ?>
        <?php if (!empty($_POST['ac'])): ?>
            <input type="hidden" name="ac" value="1">
        <?php endif; ?>
        <?php if (!empty($_POST['champagne'])): ?>
            <input type="hidden" name="champagne" value="1">
        <?php endif; ?>
        <?php if (!empty($_POST['strawberries'])): ?>
            <input type="hidden" name="strawberries" value="1">
        <?php endif; ?>
        <div class="guests-outer">
            <fieldset class="outer-fieldset  <?php echo $guestTwoVisible; ?>">
                <legend>Osoba 2</legend>
                <small class="red">Pola oznaczone symbolem * są obowiązkowe.</small>
                <div class="innerDiv">
                    <h3>Dane podstawowe</h3>
                    <label for="name">*Imię:</label>
                    <input type="text" name="g2name" id="name">
                    <label for="surname">*Nazwisko:</label>
                    <input type="text" name="g2surname" id="surname">
                    <label for="address">*Adres:</label>
                    <input type="text" name="g2address" id="address">
                    <label for="email">*Adres email:</label>
                    <input type="email" name="g2email" id="email">
                </div>
            </fieldset>
            <fieldset class="outer-fieldset <?php echo $guestThreeVisible; ?>">
                <legend>Osoba 3</legend>
                <small class="red">Pola oznaczone symbolem * są obowiązkowe.</small>
                <div class="innerDiv">
                    <h3>Dane podstawowe</h3>
                    <label for="name">*Imię:</label>
                    <input type="text" name="g3name" id="name">
                    <label for="surname">*Nazwisko:</label>
                    <input type="text" name="g3surname" id="surname">
                    <label for="address">*Adres:</label>
                    <input type="text" name="g3address" id="address">
                    <label for="email">*Adres email:</label>
                    <input type="email" name="g3email" id="email">
                </div>
            </fieldset>
            <fieldset class="outer-fieldset <?php echo $guestFourVisible; ?>">
                <legend>Osoba 4</legend>
                <small class="red">Pola oznaczone symbolem * są obowiązkowe.</small>
                <div class="innerDiv">
                    <h3>Dane podstawowe</h3>
                    <label for="name">*Imię:</label>
                    <input type="text" name="g4name" id="name">
                    <label for="surname">*Nazwisko:</label>
                    <input type="text" name="g4surname" id="surname">
                    <label for="address">*Adres:</label>
                    <input type="text" name="g4address" id="address">
                    <label for="email">*Adres email:</label>
                    <input type="email" name="g4email" id="email">
                </div>
            </fieldset>
        </div>
        <input type="submit" name="submit" id="submit" class="submit-guest">
    </form>
</div>


<!--summary-->
<div class="divBox <?php echo $summaryVisible; ?>">
    <h2>Potwierdzenie rezerwacji</h2>
    <div class="innerDiv-summary outer-border">
        <h3>Dziękujemy za złożenie rezerwacji, oto podsumowanie.</h3>
        <div class="summary-outer">
            <div class="summary-details">
                <h4>Dane podstawowe:</h4>
                <div><p>Liczba gości:</p>
                    <p><?php if (isset($guests)) {
                            echo $guests;
                        } ?></p></div>
                <div><p>Imię:</p>
                    <p><?php if (isset($name)) {
                            echo $name;
                        } ?></p></div>
                <div><p>Nazwisko:</p>
                    <p> <?php if (isset($surname)) {
                            echo $surname;
                        } ?></p></div>
                <div><p>Adres:</p>
                    <p><?php if (isset($address)) {
                            echo $address;
                        } ?></p></div>

                <div><p>Karta kredytowa:</p>
                    <p> <?php if (isset($card)) {
                            echo $card;
                        } ?></p></div>
                <div><p>Email:</p>
                    <p> <?php if (isset($email)) {
                            echo $email;
                        } ?></p></div>
            </div>
            <div class="summary-details">
                <h4>Czas pobytu:</h4>
                <div><p>Przyjazd:</p>
                    <p> <?php if (isset($arrivalDate)) {
                            echo $arrivalDate;
                        } ?>, <?php if (isset($arrivalHour)) {
                            echo $arrivalHour;
                        } ?></p></div>

                <div><p>Data wyjazdu:</p>
                    <p> <?php if (isset($departureDate)) {
                            echo $departureDate;
                        } ?></p></div>

            </div>
            <div class="summary-details">
                <h4>Wybrane opcje:</h4>
                <div><p>Dostawka:</p>
                    <p> <?php if (!empty($bed)) {
                            ;
                            echo "tak";;
                        } else {
                            echo "nie";
                        } ?></p></div>

                <div><p>Klimatyzacja:</p>
                    <p> <?php if (!empty($ac)) {
                            echo "tak";
                        } else {
                            echo "nie";
                        } ?></p></div>

                <div><p>Szampan:</p>
                    <p> <?php if (!empty($champagne)) {
                            echo "tak";
                        } else {
                            echo "nie";
                        } ?></p></div>

                <div><p>Truskawki:</p>
                    <p><?php if (!empty($strawberries)) {
                            echo "tak";
                        } else {
                            echo "nie";
                        } ?></p></div>
            </div>
            <div class="summary-details <?php echo $g2Empty; ?>">
                <h4>Gość 2</h4>
                <div><p>Imię:</p>
                    <p><?php if (isset($nameGTwo)) {
                            echo $nameGTwo;
                        } ?></p></div>
                <div><p>Nazwisko:</p>
                    <p><?php if (isset($surnameGTwo)) {
                            echo $surnameGTwo;
                        } ?></p></div>
                <div><p>Adres:</p>
                    <p><?php if (isset($addressGTwo)) {
                            echo $addressGTwo;
                        } ?></p></div>
                <div><p>Email:</p>
                    <p><?php if (isset($emailGTwo)) {
                            echo $emailGTwo;
                        } ?></p></div>
            </div>
            <div class="summary-details <?php echo $g3Empty; ?>">
                <h4>Gość 3</h4>
                <div><p>Imię:</p>
                    <p><?php if (isset($nameGThree)) {
                            echo $nameGThree;
                        } ?></p></div>
                <div><p>Nazwisko:</p>
                    <p><?php if (isset($surnameGThree)) {
                            echo $surnameGThree;
                        } ?></p></div>
                <div><p>Adres:</p>
                    <p><?php if (isset($addressGThree)) {
                            echo $addressGThree;
                        } ?></p></div>
                <div><p>Email:</p>
                    <p><?php if (isset($emailGThree)) {
                            echo $emailGThree;
                        } ?></p></div>
            </div>
            <div class="summary-details <?php echo $g4Empty; ?>">
                <h4>Gość 4</h4>
                <div><p>Imię:</p>
                    <p><?php if (isset($nameGFour)) {
                            echo $nameGFour;
                        } ?></p></div>
                <div><p>Nazwisko:</p>
                    <p><?php if (isset($surnameGFour)) {
                            echo $surnameGFour;
                        } ?></p></div>
                <div><p>Adres:</p>
                    <p><?php if (isset($addressGFour)) {
                            echo $addressGFour;
                        } ?></p></div>
                <div><p>Email:</p>
                    <p><?php if (isset($emailGFour)) {
                            echo $emailGFour;
                        } ?></p></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
