<?php
//while loop
$count = 0;
while($count <= 10){
    echo "pakistan zindabad <br/>";
    $count++;
}

$arr = array(1,2,3,4,5,6,7,8,9);
$value_initial = 0;
while($value_initial < count($arr)){
    echo $arr[$value_initial];
    $value_initial++;
}

/* foreach($arr as $newValue){
    echo $newValue;
} */
?>