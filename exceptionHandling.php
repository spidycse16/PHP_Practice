<?php
function division($divident,$divisor)
{
    if($divisor==0)
    {
        throw new Exception();
    }
    echo $divident/$divisor;
}
try{
    division(5,0);
}
catch(Exception $e)
{
    echo "this is not possible";
}
?>