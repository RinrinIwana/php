<?php

function triangle($base, $hight){
    $area = $base * $hight / 2;
    echo $area . "㎠" . "<br />";
}
function quadrangle($warp,$wide){
    $area =$warp * $wide;
    echo $area . "㎠" . "<br />";
}
function trapezium($top, $bottom, $hight){
    $area =($top + $bottom) * $hight /2;
    echo $area . "㎠" . "<br />";
}

triangle(10,5);
quadrangle(10,5);
trapezium(10,5,4);

