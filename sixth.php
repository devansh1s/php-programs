<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<title>Palindrome</title>
<body>
<?php
	$valErr = $s1 = $s2 = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['s'])) {
			$valErr = "Enter a String";
		}
		else {
			$s1 = test_input($_POST['s']);
			$s3 = str_replace(" ","",$s1);
			if ($s3 == strrev($s3)) {
				$s2 = "$s1 is Palindrome";
			}
			else {
				$s2 = "$s1 is not Palindrome";
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
<h1>Palindrome</h1>
<p>Enter string you want to check</p>
<p><span class="error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
	s:<br>
	<input type="text" name="s" value="<?php echo $s1;?>">
	<span class="error">* <?php echo $valErr;?></span>
	<br><br>
	<input type="submit" value="Submit">
</form>
<?php echo "Answer : ".$s2; ?>
<br>
</body>
</html>