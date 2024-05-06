<?php
$server="localhost";
$user="root";
$password="";
$database="php";
$conn=mysqli_connect($server,$user,$password,$database);
if($conn==1)
echo "Coneection successful";
else
echo "Connection is not successful";
//$sql="delete table login";
$sql="CREATE TABLE login (
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
$result=mysqli_query($conn,$sql);
?>