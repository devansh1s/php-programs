<?php
$s1 = "helloworld";
$s2 = "HelloWorld";
if (ctype_lower($s1)) {
  echo("$s1 is in lower case");
}
else {
  echo("$s1 is not in lower case");
}
if (ctype_lower($s2)) {
  echo(" $s2 is in lower case");
}
else {
  echo(" $s2 is not in lower case");
}
?>