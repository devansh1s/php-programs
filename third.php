<?php
$a;
$flag = false;
$a = 7;
if ($a == 1 OR $a==2) {
	echo("prime")
}
else {
	for ($i = 3;$i <= $a/2;$i++) {
		if ($a%$i==0) {
			$flag = true;
			break;
		}
	}
if ($flag) {
	echo("not prime");
}
else {
	echo("prime");
}
?>