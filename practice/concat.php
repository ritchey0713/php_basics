<?php

$name = 'John';
//$string_one = "learning how to display \"Hello $name\" to the screen\n";
// $string_one = 'learning how to display'
// .'"Hello '
// .$name
// . '! to the screen.'
// ."\n";
$string_one = 'learning how to display';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one .= "\n";
echo $string_one

?>
