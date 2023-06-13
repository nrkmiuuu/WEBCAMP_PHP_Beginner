<?php
function generateFibonacciSequence($limit)
{
    $fibonacci = [0, 1]; // 初期値

    while (end($fibonacci) <= $limit) {
        $next = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
        $fibonacci[] = $next;
    }

    return $fibonacci;
}

$limit = 10000;
$fibonacciSequence = generateFibonacciSequence($limit);

foreach ($fibonacciSequence as $value) {
    echo $value . "\n";
    if ($value >= 10946) {
        break;
    }
}
?>

