<?php
// echo "<ul>";
// for ($i = 1; $i <= 30; $i++) {
//     $square = $i * $i;
//     echo "<li>$i<sup>2</sup> = $square</li>";
// }
// echo "</ul>";

function getSquareString($n)
{
    $square = $n * $n;
    return "$n<sup>2</sup> = $square";
}

echo '<ul>';
for ($i = 1; $i <= 30; $i++) {
    echo '<li>' . getSquareString($i) . '</li>';
}
echo '</ul>';

echo '<table>';
for ($i = 1; $i <= 9; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 9; $j++) {
        $resultat = $i * $j;
        if ($j == 1 && $i == 1) {
            echo '<td></td>';
        } elseif ($j == 1 || $i == 1 || $j === $i) {
            echo "<td><b>$resultat</b></td>";
        } else {
            echo "<td>$resultat</td>";
        }
    }
    echo '</tr>';
}
echo '</table>';
