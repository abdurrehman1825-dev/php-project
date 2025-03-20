<?php
try{
$num1 = 20;
$num2 = 0;
if($num2 == 0){
    throw new Exception("can not divided by zero");
    }
    echo $num1 / $num2;
}catch(Exception $e){
 echo "Error:" .$e->getMessage();
}
try {
    //code...
    $jason = '{"name":"abdur rehman","id":2,}'; // comma error as comma is extra
$data = json_decode($jason,true);
if(json_last_error() !== JSON_ERROR_NONE){
    throw new Exception("json Error:" . json_last_error_msg());
    
}
print_r($data);
} catch (\Throwable $th) {
    //throw $th;
    echo "Error:" .$th->getMessage();
}

phpinfo();

?>