<?php

$s = file_get_contents("1.txt");
$f = 0;
for($i=0;$i<strlen($s);$i++){$f+=($s{$i}=="("?1:-1);if($f==-1){echo $i+1;break;}}
echo PHP_EOL;
