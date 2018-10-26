<?php
/* example 1 */

/*for ($i = 1; $i <= 10; $i++) {
    echo $i;
}*/

/* example 2 */

/*for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}*/

/* example 3 */  // possible but we have to add if codition in for loop other wise it will goes into infinite loop

$i = 1;
for (; ;) {
    if ($i > 10) {
        break;
    }
	echo PHP_EOL;
    echo $i;
    $i++;
}

/* example 4 */

// for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>