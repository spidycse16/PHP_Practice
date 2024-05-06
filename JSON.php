<?php
$name=array("rafi"=>20,"abid"=>30,"ruhan"=>40);
$temp=json_encode($name);
json_decode($temp);
print_r($temp,true);


$jsonob='{"bem":34,"sagor":24}';
$obj=json_decode($jsonob);
echo $obj->bem;
?>