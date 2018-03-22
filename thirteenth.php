<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<title>Pattern</title>
<body>
<?php
	$valErr = $s = "";
	$n=0;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['n'])) {
			$valErr = "Enter a Number";
		}
		else {
			$n = test_input($_POST['n']);
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<h1>Pattern</h1>
<p>Enter number of lines till you want the pattern</p>
<p><span class="error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
	n:<br>
	<input type="number" name="n" value="<?php echo $n;?>">
	<span class="error">* <?php echo $valErr;?></span>
	<br><br>
	<input type="submit" value="Submit">
</form>
<?php
	if ($n<=0) {
		echo "Answer : ".$s;
	}
	else {
		echo "Answer : <br><br>";
		for ($i=0;$i<$n;$i++) {
			for ($j=0;$j<=$i;$j++) {
				echo "* ";
			}
			echo "<br>";
		}
	}
?>
<br>
</body>
</html>