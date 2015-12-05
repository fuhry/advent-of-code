<?php

function isNice($str)
{
	$str = preg_replace('/[^a-z]/', '', $str);
	if ( strlen(preg_replace('/[^aeiou]/', '', $str)) < 3 ) {
		return false;
	}
	if ( !preg_match('/(.)\\1/', $str) ) {
		return false;
	}
	foreach ( ['ab', 'cd', 'pq', 'xy'] as $naughty ) {
		if ( strpos($str, $naughty) !== false ) {
			return false;
		}
	}

	return true;
}

$fp = fopen('5.txt', 'r');

$nice = 0;
while ( !feof($fp) ) {
	$line = trim(fgets($fp, 32));
	if ( isNice($line) ) {
		++$nice;
	}
}

printf("%d\n", $nice);
