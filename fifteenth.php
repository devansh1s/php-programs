<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<title>Even numbers</title>
<body>
<?php
	$valErr = "";
	$n = "";
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
<h1>Even numbers</h1>
<p>Enter number of first even numbers that you want</p>
<p><span class="error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
	n:<br>
	<input type="number" name="n" value="<?php echo $n;?>">
	<span class="error">* <?php echo $valErr;?></span>
	<br><br>
	<input type="submit" value="Submit">
</form>
<?php echo "Answer : <br>";
		if (is_numeric($n)) {
			$x = 0;
			for ($i=0;$i<$n;$i++) {
				echo "$x, ";
				$x+=2;
			}
		}
	?>
<br>
</body>
</html>