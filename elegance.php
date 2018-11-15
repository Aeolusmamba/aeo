<?php
$r=25;
$R=$r*$r;
function NUM($R)
{
    $count = 0;
    for ($x = 1; $x * $x <= $R; $x++) {
        $y = (int)sqrt($R - $x * $x);
        if ($y * $y + $x * $x == $R) {
            $count++;
        }
    }
    echo $count*4;
}
NUM($R);

    ?>


