<?php
# Write your PHP code from here
function isMoreThanTen($a, $b)
{
    if ((($a + $b) <= 10) || $a <= 10 || $b <= 10) {
        return true;
    } else return false;
}

$isMoreThanTen =  isMoreThanTen(2, 2);
echo "$isMoreThanTen";
