<?php
class Library{
    public $conn;
    public function __construct($server,$username , $password , $database)
    {
        $this->conn=mysqli_connect($server,$username,$password,$database);
        if($this->conn==0)
        {
            throw new Exception("Connection Failed" . $this->conn->connect_error);
        }
        else
        {
            echo "Connection was successful <br>";
        }
    }

    function Showalldata($sql)
    {
        $result=mysqli_query($this->conn,$sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $id=$row['Id'];
                $email=$row['email'];
                $name=$row['name'];
                echo "Id is $id <br> name is $name <br> email is $email<br>";
            }
        }
    }
    function create($sql)
    {
        $result=mysqli_query($this->conn,$sql);
        if($result==0)
        {
            throw new Exception("Couldnt able to insert into table" . mysqli_connect_error());
        }
        else
        {
            echo "Values inserted successfully <br>";
        }
    }

   function update($sql)
   {
    $result=mysqli_query($this->conn,$sql);
    if($result==0)
        {
            throw new Exception("Couldnt able to insert into table" . mysqli_connect_error());
        }
        else
        {
            echo "Values updated successfully <br>";
        }
   }
   function delete($sql)
   {
    $result=mysqli_query($this->conn,$sql);
    if($result==0)
        {
            throw new Exception("Couldnt able to delete into table" . mysqli_connect_error());
        }
        else
        {
            echo "Values deleted successfully <br>";
        }
   }
}


$lib=new Library("localhost","root","","php");
$lib->Showalldata("select * from newtable");
$lib->create("insert into newtable values(13,'abid','abid@gmail.com')");
$lib->update("update newtable set name='bid' where id=13");
$lib->delete("delete from newtable where id=13");
?>