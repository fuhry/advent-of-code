<?php

$s = trim(file_get_contents("3.txt"));

$h = [];
$x = $y = 0;
for ( $i = 0; $i < strlen($s); $i++ ) {
	switch($s{$i}) {
		case '^': ++$y; break;
		case 'v': --$y; break;
		case '<': --$x; break;
		case '>': ++$x; break;
	}
	$pos = sprintf("%d,%d",$x,$y);
	if ( !isset($h[$pos]) ) {
		$h[$pos] = 0;
	}
	++$h[$pos];
}

printf("%d", count($h));
