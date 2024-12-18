<?php
$num = 29;
$isPrime = true;

if ($num > 1) {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
} else {
    $isPrime = false;
}

if ($isPrime) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}
?>
