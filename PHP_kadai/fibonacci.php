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

// echo "フィボナッチ数列（1万を超えるところまで）: ";
foreach ($fibonacciSequence as $value) {
    if ($value > $limit) {
        break;
    }
    echo $value . " ";
}
?>
