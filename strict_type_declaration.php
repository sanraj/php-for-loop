<?php
declare(strict_types=1);

function sum(int $a, int $b) {
    return $a + $b;
}

var_dump(sum(1, 2)); //int(3)
var_dump(sum(1.5, 2.5)); /* Fatal error: Uncaught TypeError: Argument 1 passed to sum() must be of the type integer, float given, called in C:\php-practice\strict_type_declaration.php on line 9 and defined in C:\php-practice\strict_type_declaration.php on line 4

TypeError: Argument 1 passed to sum() must be of the type integer, float given, called in C:\php-practice\strict_type_declaration.php on line 9 in C:\php-practice\strict_type_declaration.php on line 4 */

//If we remove strict_types then then output of  var_dump(sum(1.5, 2.5)); // int(3)
?>