<?php

$rec_start = microtime();
$rec_stop = microtime();
$iter_start = microtime();
$iter_stop = microtime();
$result_iterative = "";
$result_recursive = "";
$iterative_time = "";
$recursive_time = "";
$difference_time = "";


if (isset($_POST["submit"])) {
    $n = $_POST["number"];


    function fibonacci_recursive($n)
    {
        if ($n <= 1) {
            return $n;
        }
        return fibonacci_recursive($n - 1) + fibonacci_recursive($n - 2);
    }

    $rec_start = microtime(true);
    $result_recursive = fibonacci_recursive($n);
    $rec_stop = microtime(true);
    $recursive_time = number_format($rec_stop - $rec_start, 7, '.', '');


    function fibonacci_iterative($n)
    {
        $result = 0;
        $elem1 = 0;
        $elem2 = 1;

        if ($n <= 1) {
            return $n;
        } elseif ($n == 2) {
            return 1;
        } else {
            while ($n >= 2) {
                $result = ($elem1) + ($elem2);
                $elem1 = $elem2;
                $elem2 = $result;
                $n--;
            }
        }
        return $result;
    }

    $iter_start = microtime(true);
    $result_iterative = fibonacci_iterative($n);
    $iter_stop = microtime(true);
    $iterative_time = number_format($iter_stop - $iter_start, 7, '.', '');



    $difference_time = number_format(abs($recursive_time - $iterative_time), 7, '.', '');

}


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 2</title>
    <link rel="stylesheet" href="./style.css">
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">

</head>
<body>
<div class="divBox">
    <fieldset class="outer-fieldset">
        <legend>Fibonacci</legend>
        <form name="primary" action="zadanie2.php" method="POST">
            <input type="hidden" name="primary" value="Functions">
            <div class="innerDiv">
                <label for="number">Szukany wyraz:</label>
                <input type="number" name="number" id="number" required>
            </div>
            <div class="innerDiv">
                <h3>Czas obliczenia szukanego wyrazu:</h3>
                <div class="summary-details"><p>Rekursja:</p>
                    <p><?php echo $recursive_time ?> s</p>
                </div>
                <div class="summary-details"><p>Iteracja:</p>
                    <p><?php echo $iterative_time ?> s</p></div>
                <div class="summary-details"><p>Szybsza była</p>
                    <p><?php if (!empty($iterative_time) && !empty($recursive_time)) {
                            echo $recursive_time > $iterative_time ? "iteracja o " : "rekursja o ";
                            echo $difference_time, " s";
                        }
                        ?></p></div>
            </div>
            <input type="submit" name="submit" id="submit" class="submit">
        </form>
    </fieldset>
</div>
</body>
</html>
