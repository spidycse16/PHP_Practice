<?php
Class validation{
    public static function emailCheck($email){
        $temp=filter_var($email, FILTER_VALIDATE_EMAIL);
        if(filter_var($email, FILTER_VALIDATE_EMAIL) !== false)
        {
            echo "Email is valid";
        }
        else
        throw new Exception("Email is not valid");
}
public static function checkPass($password){
    if(strlen($password)>= 8)
    {
       echo "Password is valid"; 
    }
    else
    echo "Password is not valid";
}
}
$email="sagor@gamail.com";
$pass= "12345678";
validation::emailCheck($email);
validation::checkpass($pass);
?>