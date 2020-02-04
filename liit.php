<?php
$myfile = fopen("liitsis.txt", "r") or die("Unable to open file!");
$lines = fread($myfile,filesize("liitsis.txt"));
$lines_array = explode(PHP_EOL, $lines);
$numbers = explode(" ", $lines_array[1]);

var_dump($lines_array);
$output = $lines_array[0] . ": " . ($numbers[0] + $numbers[1]) ;
var_dump($output);


fclose($myfile);
?>

