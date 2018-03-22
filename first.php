<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<title>Largest</title>
<body>
<?php
	$avalErr = $bvalErr = $cvalErr = $s = "";
	$a = $b = $c = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['a'])) {
			$avalErr = "Enter a Number";
		}
		else if (empty($_POST['b'])) {
			$bvalErr = "Enter a number";
		}
		else if (empty($_POST['c'])) {
			$cvalErr = "Enter a number";
		}
		else {
			$a = test_input($_POST['a']);
			$b = test_input($_POST['b']);
			$c = test_input($_POST['c']);
			if ($a > $b and $a > $c)
				$s = "$a is the largest";
			else if ($b > $a and $b > $c)
				$s = "$b is the largest";
			else
				$s = "$c is the largest";
		}
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<h1>Largest</h1>
<p>Enter numbers you want to check</p>
<p><span class="error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
	a:<br>
	<input type="number" name="a" value="<?php echo $a;?>">
	<span class="error">* <?php echo $avalErr;?></span>
	<br><br>
	b:<br>
	<input type="number" name="b" value="<?php echo $b;?>">
	<span class="error">* <?php echo $bvalErr;?></span>
	<br><br>
	c:<br>
	<input type="number" name="c" value="<?php echo $c;?>">
	<span class="error">* <?php echo $cvalErr;?></span>
	<br><br>
	<input type="submit" value="Submit">
</form>
<?php echo "Answer : ".$s; ?>
<br>
</body>
</html>