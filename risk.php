<?php
	include 'head.php';
?>

<br>


<?php
$file = fopen("cleaned.csv","r");

while(! feof($file))
  {
  print_r(fgetcsv($file));
  }

fclose($file);
?>