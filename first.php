<?php
$a;
$b;
$c;
$a = 10;
$b = 20;
$c = 30;
if ($a > $b) {
	if ($a > $c)
		echo($a);
}
else if ($b > $c) {
	echo($b);
}
else {
	echo($c);
}
?>