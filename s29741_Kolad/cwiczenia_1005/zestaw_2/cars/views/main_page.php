<?php

/** @var $query_main */
/** @var $row */


//ad. 5
//https://www.w3schools.com/php/php_superglobals_get.asp

while ($row = mysqli_fetch_assoc($query_main)) {
    $get_data = 'http://localhost:63342/s29741_Kolad/cwiczenia_1005/zestaw_2/cars/views/details.php?selectedId=' . $row['id'] . '&brand=' . $row['marka'] . '&model=' . $row['model'] . '&price=' . $row['cena']  . '&year=' . $row['rok'] . '&description=' . urlencode($row['opis']);
    echo '<tr>';
    echo '<td class="px-4 py-2">' . '<a class="text-blue-600 underline" href=' . $get_data . '>'  . $row['id'] .'</a>' .'</td>';
    echo '<td class="px-4 py-2">' . $row['marka'] . '</td>';
    echo '<td class="px-4 py-2">' . $row['model'] . '</td>';
    echo '<td class="px-4 py-2">' . $row['cena'] . '</td>';
    echo '</tr>';
}
?>