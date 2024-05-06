<?php
$server="localhost";
$user="root";
$password="";
$database="php";
$conn=mysqli_connect($server,$user,$password,$database);
if($conn==true)
echo "connection is successsful <br>";
else
echo "Connection is not successful";
$sql = "INSERT INTO newtable
VALUES (2, 'Doe', 'john@example.com');";
$sql .= "INSERT INTO newtable
VALUES (3, 'Moe', 'mary@example.com');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>