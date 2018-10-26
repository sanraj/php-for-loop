<?php
// How to pass vaiable arguments to a function
/*function sum($a,$b) {
	echo PHP_EOL;
   echo $a+$b;
}

sum(1, 2);
sum(1, 2.5);
sum(1, '2');
sum(1, '2.5');
sum(1, 'array(1,2,3,4)');
*/


/*function sum($a,$b):float {
   echo PHP_EOL;
   return $a+$b;
}

echo sum(1, 2); //3
echo sum(1.8, 2.5); //4.3 
echo sum(1, '2'); //3
echo sum(1, '2.5'); //3.5
echo sum(1, 'array(1,2,3,4)'); //1
*/

/*function sum(int $a,int $b) {
   echo PHP_EOL;
   return $a+$b;
}

echo sum(1, 2); //3
echo sum(1.8, 2.5); //4
echo sum(1, '2'); //3
echo sum(1, '2.5'); //3
echo sum(1, 'array(1,2,3,4)'); //Fatal error: Uncaught TypeError: Argument 2 passed to sum() must be of the type integer, string given, called
*/

function sum(int $a,int $b) {
   echo PHP_EOL;
   return $a+$b;
}

echo sum(1, 2); //3
echo sum(1.8, 2.5); //4
echo sum(1, '2'); //3
echo sum(1, '2.5'); //3
echo sum(1, 'array(1,2,3,4)'); //Fatal error: Uncaught TypeError: Argument 2 passed to sum() must be of the type integer, string given, called


?>
