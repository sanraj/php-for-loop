<?php
echo microtime(true);

/*
for loop execution time:
start time: 1537249318.154812345678910
end time  : 1537249318.1564
total time: 0.00158762932 (faster)
*/
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
/*for($i=0;$i<10; $i++) {
	//for(;$i<10; $i = $i + 1) {
		//echo PHP_EOL;
		echo $array[$i];
		// break 1;
		// continue;
		//echo "This will never be executed";
		//echo "This will never be executed";
		//echo "This will never be executed";
	//}
}
echo PHP_EOL;

echo microtime(true);*/



/*
foreach loop execution time:
start time: 1537249480.571812345678910
end time  : 1537249480.5726
total time: 0.000787496567
*/

foreach($array as $key=>$value) {
	//echo PHP_EOL;
	echo $value;
}
echo PHP_EOL;

echo microtime(true);
/*<!--
Loop1	$i 	$i<10	$i++	Loop2	$i 	$i<10	$i++	echo	
0		0	Yes		0		0		0	Y		1		1
1		1	Yes		1		1		1	Yes		2		2

http://sg2.php.net/manual/en/types.comparisons.php
http://sg2.php.net/manual/en/function.include.php
http://sg2.php.net/manual/en/function.include-once.php

auto_prepend_file or auto_append_file



*/
?>