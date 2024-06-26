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
    function query($sql)
    {
        $result=mysqli_query($this->conn,$sql);
        return $result;
    }
}

class create{
    public $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
    }

    function createTable(string $tableName, string $columns)
{

  $sql = "CREATE TABLE " . $tableName . " (";
  $sql .= $columns . ");";

  $result=mysqli_query($this->conn,$sql);
  if($result==0)
  {
    throw new Exception("Unable to connect",mysqli_error($this->conn));
  }
  else
  {
    echo "Table created successfully<br>";
  }
}
}
class InsertData {
    public $conn;
    
    public function __construct($conn)
     {
        $this->conn = $conn;
    }
    
    function insert($tablename,$columns,$values)
     {
        if (count($columns) !== count($values)) {
            throw new Exception("Number of columns doesnt match<br>");
        }
    
        $columnNames = implode(', ', $columns);
        $quotedValues = [];
        foreach ($values as $value)
         {
            $quotedValues[] = "'" . $value . "'";
        }
        $valuesString = implode(', ', $quotedValues);

        $sql = "INSERT INTO $tablename ($columnNames) VALUES ($valuesString)";
 
          //echo "$sql";
          $result=mysqli_query($this->conn,$sql);
          if($result==0)
          {
            throw new Exception("Couldnt insert values in $tablename table".mysqli_connect_error());
          }
          else
          {
            echo "Successfully inserted into $tablename<br>";
          }
    }
}

class ShowallData {
    public $conn;
    
    public function __construct($conn)
     {
        $this->conn = $conn;
    }
    
    function show($tableName,$columns)
     {
        $columnNames = implode(', ', $columns);
        $sql = "SELECT $columnNames FROM $tableName";
        $result = mysqli_query($this->conn, $sql);
        if (!$result) 
        {
            throw new Exception("Couldn't able to show the data: " . mysqli_error($this->conn));
        } else 
        {
         $result=mysqli_query($this->conn,$sql);
         if ($result === false) 
         {
            echo "Error: " . $this->conn->error;
        }
         else 
         {
            while ($row = $result->fetch_assoc()) {
                foreach ($row as $key => $value) {
                    echo "$key: $value<br>";
                }
                echo "<br>";
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
    
    function update($tableName,$columnName,$columnValue,$id)
     {
        $sql="update $tableName set $columnName='$columnValue' where id=$id;";
        //echo $sql;
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
    function delete($tableName,$id)
    {
        $sql="delete from $tableName where id=$id";
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
    //connection setup
    $connection = new Connect("localhost", "root", "", "php");


    //if you want to create a table;

    // $c5=new create($connection->conn);
    // $tablename="agetable";
    // $columns = "id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, age INT";
    // $c5->createTable($tablename,$columns);

    //insert your data first the columns and then corresponding data
    $c1 = new InsertData($connection->conn);
    $c1_tableName = "agetable";
    $c1_columns = ["id","name","age"];
    $c1_values = [60, "C",30];
    //$c1->insert("INSERT INTO newtable VALUES (9, 'abid', 'abid@gmail.com')");
    $c1->insert($c1_tableName,$c1_columns,$c1_values);

    //to show the data. input specific column names. or '*' for all the data
    $c2=new ShowallData($connection->conn);
    $c2_tablename="agetable";
    $c2_columns=["name","age"];
    $c2->show($c2_tablename,$c2_columns);


    //update any column to specific values;
    $c3=new UpdateData($connection->conn);
    $c3_tableName="agetable";
    $c3_columNname="name";
    $c3_columnNewValue="newentry";
    $c3_id="1";
    $c3->update($c3_tableName,$c3_columNname,$c3_columnNewValue,$c3_id);


    //to delete a entry;
    $c4=new DeleteData($connection->conn);
    $c4_tableName="agetable";
    $c4_id=836;
    $c4->delete($c4_tableName,$c4_id);
    //$c4->delete("delete from newtable where Id=1");

   
    
}
 catch (Exception $e)
 {
    echo "Error: " . $e->getMessage();
}
?>
