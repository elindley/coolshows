<?php
include("connection.php"); 
mysql_query('INSERT INTO `show` (title, description) VALUES (\'' . $_POST["title"] . '\',\'' . $_POST["description"] . '\')'); 
header("Location: index.php");
?>
