<?php

include "conection.php";
//
//$name = $_POST['name'];
//$image = $_POST['image'];
//$description = $_POST['description'];
//if(isset($_POST['submit']))
//{
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $image = filter_var(trim($_POST['image']),FILTER_SANITIZE_URL);
    $description = filter_var(trim($_POST['description']),FILTER_SANITIZE_STRING);




$user='root';
$pass='';

//Підключення до бази данних
try {
    $dbh = new PDO("mysql:host=localhost;dbname=pv121",$user,$pass);
}catch (Exeption $ex)
{
    print '"Error".$ex.getMessage().<br/>';
}


   $comand = $dbh->query("INSERT INTO `tbl_categories` (`name`, `image`, `description`) VALUES ('$name', '$image', '$description')");

    header('Location: /');
//
//}
//$sql = "INSERT INTO `tbl_categories` (`id`, `name`, `image`, `description`) VALUES (NULL, '$name', '$image', '$description')";
//$command = $dbh->query($sql);
//if($command == TRUE)
//{
//    echo "Данні додано";
//}
//else{
//    echo "ERROR!". $sql."<br>".$command->error;
//}
?>