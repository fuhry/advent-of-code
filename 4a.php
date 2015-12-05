<?php

$key = 'yzbqklnj';
for ( $i = 1; ; $i++ ) {
	$h = md5("{$key}{$i}");
	if ( preg_match('/^0{5}/', $h) ) {
		break;
	}
}

echo "$i => $h\n";
