<?php

$key = 'yzbqklnj';
for ( $i = new GMP("0"); ; $i += 1 ) {
	$h = md5($inp = ($key . gmp_strval($i)));
	if ( gmp_cmp($i % 1000000, 0) === 0 ) {
		echo "$i: $inp => $h" . PHP_EOL;
	}
	if ( preg_match('/^0{6}/', $h) ) {
		break;
	}
}

echo "$i => $h\n";
