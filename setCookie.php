<?php
//sets the cookie,cookie name,cookie value,time() return the time from 1970 till now, "/" says that this cookie can be used anywhere in the website;
setcookie("catagory" , "Books", time()+86400,"/");
if(!isset($_COOKIE["catagory"]))
{
    echo "cookie is not set yet";
}
else
{
    $cok=$_COOKIE['catagory'];
echo "this is $cok";
}

?>