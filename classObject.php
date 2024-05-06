<?php
class Animal{
    private $name;
    private $age;

    public function __construct()
    {
        $this->name="";
        $this->age=0;
    }
    // public function show()
    // {
    //     echo "name is $name ";
    //     echo "age is $age";
    // }

    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name=$name;
    }
    public function setage($age)
    {
        $this->age=$age;
    }
}
$dog=new Animal();
$dog->setname("Bulldog");
$dog->setage(12);
echo "check";
echo $dog->getname();
?>