<?php

var_dump($_GET);
$username = $_GET["username"];
$password = $_GET["password"];

if($username == "alo@gmail.com" && $passwd == "123" && isset($username))
{
echo "Hello".$username;
} else {
    echo "Byebye" . $username;
}
?>