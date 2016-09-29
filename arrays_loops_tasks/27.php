<?php

$cols = rand(2,5);
$rows = rand(2,5);
$a = 0;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo '<table>';
for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        foreach ($colors as $value) {
            $a = $colors[rand(0, 6)];
            $style = "style='background: $a'";
            echo "<td $style>$a</td>";
        }}
    echo '</tr>';
}
echo '</table>';