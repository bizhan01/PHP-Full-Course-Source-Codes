<?php
$number = 17;
$isPrime = true;
for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
    }
}
if ($isPrime) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}
?>
