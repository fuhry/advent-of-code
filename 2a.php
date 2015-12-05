<?php
$fp = fopen('2.txt', 'r');
$sqft = 0;
while ( !feof($fp) ) {
	$line = trim(fgets($fp, 32));
	if ( count($line = explode("x", $line)) < 3 ) {
		continue;
	}
	list($l, $w, $h) = $line;
	$sides = [$l*$w, $l*$h, $w*$h];
	$sqft += 2*array_sum($sides) + min($sides);
}

printf("%d\n", $sqft);
