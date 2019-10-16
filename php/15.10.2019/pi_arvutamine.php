<?php
$max = 100000000; // max
$bottom = 1;
$pi = 0;
for ($i = 1; $i < $max; $i++) {
    if ($i % 2 == 1) {
        $pi += 4 / $bottom;
    } else {
        $pi -= 4 / $bottom;
    }
    $bottom += 2;
}
echo $pi;
