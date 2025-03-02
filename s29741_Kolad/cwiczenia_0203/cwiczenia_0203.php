<?php
//Zadanie 1
    $fruits = array("mango","papaya","orange","banana","apple");

    function printFruits($fruits)
    {
        foreach ($fruits as $fruit) {
            $reverse = "";
            for($i = strlen($fruit)-1; $i >= 0; $i--) {
                $reverse .= $fruit[$i];
            }
            if($fruit[0] == "p"){
                echo "Czy zaczyna się na 'p': tak", "\n";
            }else {
                echo "Czy zaczyna się na 'p': nie", "\n";
            }
            echo $reverse, "\n";
        }
    }

    printFruits($fruits);

//Zadanie 2
//Napisz program, który wypisze na ekranie wszystkie liczby pierwsze z zadanego zakresu.
//    do 2 zadania można użyć readline