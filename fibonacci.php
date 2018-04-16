<?php
/**
 * Checks if an integer number is a valid Fibonacci number.
 * By checking two conditions - if either is a perfect square
 * Then the integer number can be declared a valid Fibonacci number
 * @param  int $n 
 * 
 * @return bool
 */

function fibonacciCheck($n) {

    // Checks if Condition 1 is a perfect square

    $dCond1 = sqrt((5*pow($n, 2))-4);
    $nCond1 = (int)$dCond1;
    $dDecCond1 = $dCond1 - $nCond1;

    // Checks if Condition 2 is a perfect square

    $dCond2 = sqrt((5*pow($n, 2))+4);
    $nCond2 = (int)$dCond2;
    $dDecCond2 = $dCond2 - $nCond2;   
   
    // Returns true if either Condition 1 or two is a perfect square

    if (!$dDecCond1 || !$dDecCond2) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['fib']) && ($_POST['fib'] != '')) {
    
    $n = (int) $_POST['fib'];    

    $result = fibonacciCheck($n);

    if ($result) {
        echo("The integer: {$n} you entered is a valid Fibonacci number");
    } else {
        echo ("The integer: {$n} you entered is not a valid Fibonacci number");
    }

} else {
    echo ("Please enter a valid integer number.");
}

?>
