<?php
    $y= $_GET['s'];
    $x = $_GET['n'];
    $d = $_GET['deist'];
    switch($d) {
        case "+":
            $res = $y + $x;
            break;
        case "-":
            $res = $y - $x;
            break;
        case "*":
            $res = $y * $x;
            break;
        case "/":
            $res = $y / $x;
            break;
    }
    echo $res;
?>