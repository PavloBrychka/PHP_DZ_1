<?php
$user='root';
$pass='';

//Підключення до бази данних
try {
    $dbh = new PDO("mysql:host=localhost;dbname=pv121",$user,$pass);
}catch (Exeption $ex)
{
    print '"Error".$ex.getMessage().<br/>';
}
