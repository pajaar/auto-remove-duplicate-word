<?php
// github.com/paja-R
$file = "list2.txt";
$savefile = "saved.txt";

$get = file_get_contents($file);
$pisah = array_unique(explode("\r\n", $get));

// save result
$lol = fopen($savefile, 'w');
fwrite($lol, implode($pisah,"\n"));
fclose($lol);
?>
