<?php
function menor($a, $b)
{
    return $a > $b ? $b : $a;
}

function distancia($x1, $y1, $x2, $y2)
{
    return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
}

function medias($n1, $n2, $n3, $tipo = "A")
{
    switch($tipo){
        default:
        case "A":
            return ($n1 + $n2 + $n3) / 3;
        case "P":
            return ($n1*5 + $n2*3 + $n3*2) / 10;
        case "H":
            return 3 / (1/$n1) + (1/$n2) + (1/$n3);
    }
}
