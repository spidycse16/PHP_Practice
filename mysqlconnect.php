<?php
$server="localhost";
$user="root";
$password="";
$conn=mysqli_connect($server,$user,$password);
if($conn)
echo "Connection is successful";
else
echo "Connection was not successful";
?>