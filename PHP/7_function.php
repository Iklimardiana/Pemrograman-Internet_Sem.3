<?php
function cek($bil)
{
    if ($bil % 2 == 0) {
        echo $bil . " = <b><i> genap <i><b>";
    } else {
        echo $bil . " = <b><i> ganjil <i><b>";
    }
}

cek(7);
