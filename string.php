<?php 

$first_name = "Abdur";
$second_name = "Rehman";

echo "My name is  $second_name";

// coutn the length
$count = strlen($first_name);
echo "<br/>$count<br/>";

//replace partial string
$name = "flavio";
echo "<br/>", str_replace("vio","wer",$name);