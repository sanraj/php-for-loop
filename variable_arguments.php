<?php
// How to pass vaiable arguments to a function
/*function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

//echo sum(1, 2, 3, 4); //10
//echo sum(1); //1
//echo sum(); //0
*/

// How to use predefined functions as like array_sum instead of for or foreach loops
// Also we can use range() function instead of for loop
/*$arrayNum = [];
for($i=0;$i<=100;$i++){
	$arrayNum[] = $i;
}

//$arrayNum = range(0,100,1);

//echo sum(...$arrayNum); //5050
function sum(...$numbers){
	return array_sum($numbers);
}

echo array_sum($arrayNum); //5050
*/

// func_get_args(),func_get_arg() and func_num_args()
/*function sum() {
    //var_dump( func_get_args() ); //array(4) {  [0] =>  int(1)  [1] =>  int(2)  [2] =>  int(3)  [3] =>  int(4) }	
	//var_dump( func_get_arg() ); //Thown Warning: func_get_arg() expects exactly 1 parameter, 0 given
	//var_dump( func_get_arg(0) ); //int(1)
	echo func_num_args(); //4
}

sum(1, 2, 3, 4);*/

?>