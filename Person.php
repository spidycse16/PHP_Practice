<?php
class Person{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name= $name;
        $this->age=$age;
    }
}

class Emp extends Person{
    public $salary;
    public $position;
    public function __construct($name,$age,$salary,$position)
    {
        parent::__construct($name,$age);
        $this->salary=$salary;
        $this->position=$position;
    }

    public function show(){
        
        echo $this->name;
        echo $this->age;
        echo $this->salary;
        echo $this->position;
    }


}
$emp=new Emp("sagor",24,"10000","intern");
$emp->show();
?>