<?php
class Connect {
    public $conn;
    
    public function __construct($server, $username, $password, $database) 
    {
        $this->conn = mysqli_connect($server, $username, $password, $database);
        if (!$this->conn) {
            throw new Exception("Connection Failed: " . mysqli_connect_error());
        } else {
            echo "Connection was successful <br>";
        }
    }
}

class InsertData {
    public $conn;
    
    public function __construct($conn)
     {
        $this->conn = $conn;
    }
    
    function insert($sql)
     {
        $result = mysqli_query($this->conn, $sql);
        if (!$result)
         {
            throw new Exception("Couldn't able to insert into table: " . mysqli_error($this->conn));
        } else
         {
            echo "Values inserted successfully <br>";
        }
    }
}

class ShowallData {
    public $conn;
    
    public function __construct($conn)
     {
        $this->conn = $conn;
    }
    
    function show($sql)
     {
        $result = mysqli_query($this->conn, $sql);
        if (!$result) 
        {
            throw new Exception("Couldn't able to show the data: " . mysqli_error($this->conn));
        } else 
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
    }
}

class UpdateData {
    public $conn;
    
    public function __construct($conn)
     {
        $this->conn = $conn;
    }
    
    function update($sql)
     {
        $result = mysqli_query($this->conn, $sql);
        if (!$result)
         {
            throw new Exception("Couldn't able to update into table: " . mysqli_error($this->conn));
        } 
        else
         {
            echo "Values updated successfully <br>";
        }
    }
}

class DeleteData{
    public $conn;
    public function __construct($conn)
    {
        $this->conn=$conn;
       
    }
    function delete($sql)
    {
        $result=mysqli_query($this->conn,$sql);
        if($result==0)
        {
            throw new Exception("Unable to delete item" . mysqli_error($this->conn));
        }
        else
        echo "Item deleted successfully";
    }
}

try {
    $connection = new Connect("localhost", "root", "", "php");

    $c1 = new InsertData($connection->conn);
    $c1->insert("INSERT INTO newtable VALUES (5, 'abid', 'abid@gmail.com')");


    $c2=new ShowallData($connection->conn);
    $c2->show("select * from newtable");


    $c3=new UpdateData($connection->conn);
    $c3->update("update newtable set name='Ruhan' where Id=15");


    $c4=new DeleteData($connection->conn);
    $c4->delete("delete from newtable where Id=1");
    
}
 catch (Exception $e)
 {
    echo "Error: " . $e->getMessage();
}
?>
