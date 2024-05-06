<?php
abstract class myclass{
    abstract function bark();
    abstract function hey();
}

class dog extends myclass{

    function bark()
    {
        echo "bark";
    }
    function hey()
    {
        echo "hey";
    }

}
$dog1=new dog();
$dog1->bark();
?>