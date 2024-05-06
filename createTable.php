<?php
$server="localhost";
$user="root";
$password="";
$database= "php";
$conn=mysqli_connect($server,$user,$password, $database);
if($conn)
echo "Connection is successful";
else
echo "Connection was not successful";

$sql="CREATE table newtable(Id INT(10) Primary key,
name varchar(20),email varchar(20))";
$result=mysqli_query($conn,$sql);
if($result==1)
echo "Table created";
else
echo "Error creating tables";
?>