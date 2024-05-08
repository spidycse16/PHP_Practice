<?php
include 'file1.php';
include 'file2.php';
//use ‘\’ to define which class you want to use.
//if we want to use first show function-
$obj=new first\myclass();
$obj->show();
?>
