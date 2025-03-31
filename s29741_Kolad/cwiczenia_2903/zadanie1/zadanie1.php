<?php
$isDateSet = "hidden";
$dayOfWeek = "";
$age = "";
$closestBirthday = "";

if (isset($_POST["submit"])) {
    setlocale(LC_ALL, "plk");
    $today = getdate();
    $timestamp = strtotime($_POST["birthday"]);

    $d1 = date('d', $timestamp);
    $m1 = date('m', $timestamp);
    $y1 = date('Y', $timestamp);

    $d2 = $today["mday"];
    $m2 = $today["mon"];
    $y2 = $today["year"];

//    birthday
    $time1 = mktime(0, 0, 0, $m1, $d1, $y1);
//    today
    $time2 = mktime(0, 0, 0, $m2, $d2, $y2);
//    closest birthday current year
    $time3 = mktime(0, 0, 0, $m1, $d1, $y2);

    $ageInYears = round(abs(ceil($time2 - $time1) / 86400 / 365));
    $next = round(ceil(($time3 - $time2) / 86400));
    if ($next < 0) {
        $next += 365;
    }

//    $next = round(abs(ceil($time3 - $time2) / 86400));

    $dayOfWeek = strftime("%A", $timestamp);
    $age = round($ageInYears);
    $closestBirthday = $next;
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

<div class="divBox">
    <fieldset class="outer-fieldset">
        <legend>Date check</legend>
        <form name="primary" action="zadanie1.php" method="POST">
            <input type="hidden" name="primary" value="Functions">
            <div class="innerDiv">
                <label for="birthday">Data urodzenia:</label>
                <input type="date" name="birthday" id="birthday" required>
            </div>
            <div class="innerDiv">
                <div class="summary-details"><p><?php echo $age==0 ?  "Urodzisz " :  "Urodziłeś " ;?>się w:</p>
                    <p><?php echo $dayOfWeek ?></p>
                </div>
                <div class="summary-details"><p>Twój wiek</p>
                    <p><?php echo $age ?> lat/a</p></div>
                <div class="summary-details"><p><?php echo $age==0 ?  "Pierwsze " :  "Następne " ;?> urodziny za </p>
                    <p><?php echo $closestBirthday ?> dni</p></div>
            </div>
            <input type="submit" name="submit" id="submit" class="submit">
        </form>
    </fieldset>
</div>
</body>
</html>



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


