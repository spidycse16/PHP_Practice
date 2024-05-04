<?php
include ("form1.php");
echo "today is ";
echo date("l");
echo "<br>";
$myfile=fopen("hi.txt","r+")  or die("invalid file bro");
$txt="new line\n";
fwrite($myfile,$txt);

echo fread($myfile,filesize("hi.txt"));
fclose($myfile);
?>