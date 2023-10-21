<?php
function arrayPairSum($nums) {
    sort($nums); 
    print_r( $nums);

    $num=count($nums);
    $sum = 0;

    for ($i = 0; $i < $num; $i += 2) {
        $sum = $sum + $nums[$i];
        echo("Current Sum: $sum\n");
    }
    echo("Final Sum: $sum\n");
    return $sum;
}

arrayPairSum([6, 2, 6, 5, 1, 2]);
