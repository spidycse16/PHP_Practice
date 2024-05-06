<?php

function hey()
{
    echo "This is hey function";
}

function hello()
{
    echo " this is hello function";
}
function callback($hi)
{
    $hi;
}
callback(hey());


function exclaim($str)
{
    echo $str;
    return "!";
}

function ask($str)
{
    echo $str;
    return "?";
}

function callback2($str, $func)
{
    echo $func($str);
}
callback2("Hello world", "exclaim");
echo "<br>";
callback2("HEllo world", "ask");
?>

<html>

</html>