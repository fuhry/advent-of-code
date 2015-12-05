<?php

$s = trim(file_get_contents("3.txt"));

class Santa {
	protected $x = 0;
	protected $y = 0;

	public function up()    { $this->y++; }
	public function down()  { $this->y--; }
	public function left()  { $this->x--; }
	public function right() { $this->x++; }
	public function coords() {
		return sprintf("%d,%d", $this->x, $this->y);
	}
}

$santa = new Santa;
$robosanta = new Santa;

$h = [];
$x = $y = 0;
for ( $i = 0; $i < strlen($s); $i++ ) {
	$iter = $i % 2 ? $santa : $robosanta;
	switch($s{$i}) {
		case '^': $iter->up();    break;
		case 'v': $iter->down();  break;
		case '<': $iter->left();  break;
		case '>': $iter->right(); break;
	}
	$pos = $iter->coords();
	if ( !isset($h[$pos]) ) {
		$h[$pos] = 0;
	}
	++$h[$pos];
	unset($iter);
}

printf("%d", count($h));
