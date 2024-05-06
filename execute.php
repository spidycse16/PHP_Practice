<?php
$server="localhost";
$user="root";
$password="";
$database="php";
$conn=mysqli_connect($server,$user,$password,$database);
if($conn)
echo "Connection is successful";
else
echo "Connection was not successful";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   
    $email=$_POST['email'];
    $password=$_POST['password'];
   // echo "Email is $email and password is $password";
   $sql = "INSERT INTO login
VALUES ('$email','$password');";
    $result=mysqli_query($conn,$sql);
    if($result==1)
    echo "values inserted successfully";
else
echo "something is wrong i can feel it";

    
}
?>