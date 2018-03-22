<html>
<title>color list</title>
<body>
<?php
	$a = array('white','green','red');
?>
<h1>color list</h1>
<?php
	for ($i=0;$i<count($a);$i++) {
		echo "$a[$i], ";
	}
	echo "<br>";
?>
<ul>
<?php
	sort($a);
	for ($i=0;$i<count($a);$i++) {
		echo "<li>$a[$i]</li>";
	}
?>
</ul>
<br>
</body>
</html>