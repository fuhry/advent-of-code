<?php
$s = file_get_contents("1.txt");
echo substr_count($s, "(") - substr_count($s, ")");
echo PHP_EOL;
