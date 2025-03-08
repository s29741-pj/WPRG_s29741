<?php
//Zadanie 1
$fruits = array("mango", "papaya", "orange", "banana", "apple");

function printFruits($fruits)
{
    foreach ($fruits as $fruit) {
        $reverse = "";
        for ($i = strlen($fruit) - 1; $i >= 0; $i--) {
            $reverse .= $fruit[$i];
        }
        if ($fruit[0] == "p") {
            echo "Czy zaczyna się na 'p': tak", "\n";
        } else {
            echo "Czy zaczyna się na 'p': nie", "\n";
        }
        echo $reverse, "\n";
    }
}

//
//printFruits($fruits);
//

//Zadanie 2
//sito Eratostenesa
function firstNumbers()
{
    echo "Enter range: ";
    $n = readline();
    $numList = array();
//    $n=30;
    for ($i = 2; $i < $n + 1; $i++) {
        $numList[] = $i;
    }
    for ($j = 0; $j < count($numList); $j++) {
        for ($k = 2; $k < count($numList); $k++) {
            if ($numList[$j] > sqrt($n)) {
                break;
            }
            $index = array_search($numList[$j] * $k, $numList);
            if ($index === false) {
                continue;
            }
            array_splice($numList, $index, 1);
        }
//        var_dump($numList);
    }
    echo "First numbers are: ";
    for ($i = 0; $i < count($numList); $i++) {
        echo $numList[$i], ", ";
    }
}

//
//firstNumbers();
//

//Zadanie 3
function fibonacci()
{
    echo "Enter number: ";
    $n = readline();
    $fibo = array();
    $line = 1;

    for ($i = 0; $i < $n; $i++) {
        if ($n == 1 || $i == 0) {
            $fibo[] = $i;
        } elseif ($i == 1) {
            $fibo[] = $i + $fibo[$i - 1];
        } else {
            $fibo[] = $fibo[$i - 1] + $fibo[$i - 2];
        }
    }

    for ($j = 0; $j < count($fibo); $j++) {
        if ($fibo[$j] % 2 != 0) {
            echo $line, "\t", $fibo[$j], "\n";
            $line++;
        }
    }
}

//
//fibonacci();
//

//Zadanie 4
function textTransform()
{
    $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    $text_exploded = explode(" ", $text);

//    $value == "." || $value == "," || $value == "'" )
    for ($i = 0; $i < count($text_exploded); $i++) {
        if(strpos($text_exploded[$i], ".") !== false || strpos($text_exploded[$i], ",") !== false || strpos($text_exploded[$i], "'") !== false){
            for ($j = $i; $j < count($text_exploded) - 1; $j++) {
                $text_exploded[$j] = $text_exploded[$j + 1];
            }
            array_pop($text_exploded);
            $i--;
        }
    }
//    var_dump($text_exploded);

    $assArray = array();

    foreach ($text_exploded as $text) {
        if(array_search($text, $text_exploded) % 2 != 0){
            $assArray[$text] = $text_exploded[array_search($text, $text_exploded)+1];
        }
    }


    foreach ($assArray as $key => $value) {
        echo "[",$key,"]", "\t", $value, "\n";
    }
//    print_r($assArray);
}

//
//textTransform();
//

