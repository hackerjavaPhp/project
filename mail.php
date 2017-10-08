<?php 

$to = "adamovich@elenox.by"; 
$subject = $_POST['name']; 
$message = $_POST['phone'];


if(strlen($_POST['phone']) > 6)
{
	mail ($to, $subject , $message ); 
	header('Location: index.html');
}
header('Location: index.html');
?>