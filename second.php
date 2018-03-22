<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<title>Factorial</title>
<body>
<?php
	$valErr = $s = "";
	$n;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['n'])) {
			$valErr = "Enter a Number";
		}
		else {
			$n = test_input($_POST['n']);
			$flag = false;
			if ($n == 1 OR $n==2) {
				$s = "$n is prime";
			}
			else {
				$s = fact($n);
			}
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function fact($n) {
		$b = 1;
		for ($i = 2;$i <= $n; $i++) {
			$b = $b*$i;
		}
		return $b;
	}
?>
<h1>Factorial</h1>
<p>Enter number you want the factorial of</p>
<p><span class="error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
	n:<br>
	<input type="number" name="n" value="<?php echo $n;?>">
	<span class="error">* <?php echo $valErr;?></span>
	<br><br>
	<input type="submit" value="Submit">
</form>
<?php echo "Answer : ".$s; ?>
<br>
</body>
</html>