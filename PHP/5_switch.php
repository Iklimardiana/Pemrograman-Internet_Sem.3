<?php
$bil = 7;
switch ($bil) {
    case $bil % 2 == 0:
        echo $bil . " = <b><i>genap<i><b>";
        break;
    case $bil % 2 != 0:
        echo $bil . " = <b><i>genap<i><b>";
        break;
    default:
        echo "adalah 0";
}
