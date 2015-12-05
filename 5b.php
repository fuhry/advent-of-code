<?php

function isNice($str)
{
	$str = preg_replace('/[^a-z]/', '', $str);
	
	if ( !preg_match('/(..).*\\1/', $str) ) {
		return false;
	}

	if ( !preg_match('/(.).\\1/', $str) ) {
		return false;
	}

	echo $str . PHP_EOL;

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
