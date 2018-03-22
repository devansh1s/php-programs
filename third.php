<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<title>Check Prime</title>
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
				for ($i = 3;$i <= $n/2;$i++) {
					if ($n%$i==0) {
					$flag = true;
					break;
					}
				}
				if ($flag) {
					$s = "$n is not prime";
				}
				else {
					$s = "$n is prime";
				}
			}
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<h1>Check prime</h1>
<p>Enter number you want to check</p>
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