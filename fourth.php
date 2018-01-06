<?php
$a;
$temp;
$a = array(5,4,3,2,1);
for ($i=0;$i<5;$i++)
  echo($a[$i]);
for ($i=0;$i<5;$i++) {
  for ($j=0;$j<4;$j++) {
      if ($a[$j] >= $a[$j+1]) {
              $temp = $a[$j];
              $a[$j] = $a[$j+1];
              $a[$j+1] = $temp;
      }
    }
}
echo(" Sorted array : ");
for ($i=0;$i<5;$i++)
  echo($a[$i]);
?>
