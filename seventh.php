<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<title>Array Sort</title>
<body>
<?php
	$valErr = $s = "";
	$a = array();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['s'])) {
			$valErr = "Enter a Number";
		}
		else {
			$s = test_input($_POST['s']);
			$b = explode(" ",$s);
			$n = count($b);
			unset($a);
			$a = array();
			for ($i=0;$i<$n;$i++) {
				$a[$i] = (int)$b[$i];
			}
			for ($i=0;$i<$n;$i++) {
				for ($j=0;$j<($n-$i-1);$j++) {
					if ($a[$j] > $a[$j+1]) {
						$temp = $a[$j];
						$a[$j] = $a[$j+1];
						$a[$j+1] = $temp;
					}
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
<h1>Array sort</h1>
<p>Enter elements of array separated by space</p>
<p><span class="error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
	s:<br>
	<input type="text" name="s" value="<?php echo $s;?>">
	<span class="error">* <?php echo $valErr;?></span>
	<br><br>
	<input type="submit" value="Submit">
</form>
<?php
	$n = count($a);
	if ($n<=0) {
		echo "Sorted array:";
	}
	else {
		echo "Sorted array:<br><br>";
		for ($i=0;$i<$n;$i++) {
			echo "$a[$i] ";
		}
	}
?>
<br>
</body>
</html>