<?php
$s1 = "string";
$s2 = "StrinG";
if ($s1 == strtolower($s1))
  echo("String s1 = $s1 is in lower case; ");
else
  echo("String s1 = $s1 is not in lower case; ");
if ($s2 == strtolower($s2))
  echo("String s2 = $s2 is in lower case; ");
else
  echo("String s2 = $s2 is not in lower case; ");
?>
