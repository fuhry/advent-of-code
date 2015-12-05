<?php
$fp = fopen('2.txt', 'r');
$ft = 0;
while ( !feof($fp) ) {
	$line = trim(fgets($fp, 32));
	if ( count($line = explode("x", $line)) < 3 ) {
		continue;
	}
	sort($line);
	list($l, $w, $h) = $line;
	$peri = 2*($l+$w);
	$ft += $peri + $l*$w*$h;
}

printf("%d\n", $ft);
