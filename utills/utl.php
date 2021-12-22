
<?php

function chuyen($v) {
    return $v * 20000;
}

function doi($v) {
    if ($v > 4) {
        return "red";
    }
    if ($v > 2) {
        return "yellow";
    } else {
        return "green";
    }
}
?>
