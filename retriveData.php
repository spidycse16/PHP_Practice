<?php
$server="localhost";
$user="root";
$password="";
$database="php";
$conn=mysqli_connect($server,$user,$password,$database);
if($conn==1)
echo "connected successfully";
else
echo "Failed to connect";

$sql="select * from newtable";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {

        $id=$row["Id"];
        $name=$row['name'];
        $email=$row['email'];
        echo "The id is $id <br> The name is $name <br> The email is $email";
    }
}

?>