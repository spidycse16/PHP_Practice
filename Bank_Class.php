<?php
class Bank{
    private $acc_no;
    private $balance;
    public function __construct($acc_no, $balance)
    {
        $this->acc_no=$acc_no;
        $this->balance=$balance;
    }
    function Diposit($amount)
    {
        $this->balance+=$amount;
    }
    function Withdraw($amount)
    {
        $this->balance-=$amount;
    }

    function getbalance()
    {
       echo $this->balance;
    }
}

$obj=new Bank(1234,1213);
$obj->Diposit(1000);
$obj->getbalance();

?>