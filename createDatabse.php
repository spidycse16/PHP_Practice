<?php
$server="localhost";
$user="root";
$password="";
$conn=mysqli_connect($server,$user,$password);
if($conn)
echo "Connection is successful";
else
echo "Connection was not successful";

$sql="CREATE DATABASE PHP";
$result=mysqli_query($conn,$sql);
if($result==1)
echo "Database created successfully";
else
echo "Databse wasnt created successfully";
?>