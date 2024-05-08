<?php
class emp{
    public $name;
    public $id;

    public function __construct($name,$id)
    {
        $this->name=$name;
        $this->id=$id;
    }
}

class factory{
    public static function create($name,$id)
    {
        return new emp($name,$id);
    }
}
$obj=factory::create("sagor",1);
print_r($obj);
?>