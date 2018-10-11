<?php
//Passing function parameters by reference

/*function passingByRef(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
passingByRef($str);
echo $str;    // outputs 'This is a string, and something extra.'*/

// If same name function created then following error will be thrown:
/*Fatal error: Cannot redeclare passingByRef() (previously declared in C:\php-practice\function_declarations.php:4) in C:\php-practice\function_declarations.php on line 16 */

/*function passingByRef($string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
passingByRef($str);
echo $str;    // outputs 'This is a string,'*/


//Use of default parameters in functions
/*function defaultParameters($type = "defaultValue")
{
    return "Its a $type.\n";
}
echo defaultParameters(); //Its a defaultValue.
echo defaultParameters(null); //Its a .
echo defaultParameters("myValue");*/ //Its a myValue.

//Using non-scalar types as default values
//non-scalar means arrays/objects 
//scalar means int,float,string (has single value)
/*function defaultParameters($type = array("defaultValue"), $defaultValue = NULL)
{
    return "Its a $type[0] \n $defaultValue";
	
}
echo defaultParameters(); //Its a defaultValue.
echo defaultParameters(array("myValue1","myValue2"),"sampleText"); //Its a myValue1 sampleText. */

//Incorrect usage of default function arguments
/*function functionArgumets($agr1 = "argument1", $arg2)
{
    return "functionArgumets => $agr1 $arg2.\n";
}
 
echo functionArgumets("argument1");   // Will throw an Error: Notice: Undefined variable: arg2 in C:\php-practice\function_declarations.php on line 46*/

//Correct usage of default function arguments
function functionArgumets($agr1, $arg2 = "argument2")
{
    return "functionArgumets => $agr1 $arg2.\n";
}
 
echo functionArgumets("argument1");   // functionArgumets => argument1 argument2.
?>