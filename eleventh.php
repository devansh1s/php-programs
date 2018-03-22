<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<title>Sub-string</title>
<body>
<?php
	$s1Err = $s2Err = $s = "";
	$s1 = $s2 = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['s1'])) {
			$s1valErr = "Enter a string";
		}
		else if (empty($_POST['s2'])) {
			$s2valErr = "Enter a string";
		}
		else {
			$s1 = test_input($_POST['s1']);
			$s2 = test_input($_POST['s2']);
			if (strpos($s1,$s2) !== false) {
				$s = "$s2 is in $s1";
			}
			else {
				$s = "$s2 is not in $s1";
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
<h1>Find substring</h1>
<p>Enter strings you want to work with</p>
<p><span class="error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
	string:<br>
	<input type="text" name="s1" value="<?php echo $s1;?>">
	<span class="error">* <?php echo $s1Err;?></span>
	<br><br>
	sub-string:<br>
	<input type="text" name="s2" value="<?php echo $s2;?>">
	<span class="error">* <?php echo $s2Err;?></span>
	<br><br>
	<input type="submit" value="Submit">
</form>
<?php echo "Answer : ".$s; ?>
<br>
</body>
</html>