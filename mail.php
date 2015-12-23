<?php 



$message = "Hi,\n\n";
$message .= "New lead is beign submitted with the following details\n";
$message .= "Name: " . $_POST["name"] . "\n";
$message .= "Email: " . $_POST["email"] . "\n";
$message .= "Phone: " . $_POST["phone"] . "\n";
$message .= "Query Type: " . $_POST["qrytype"] . "\n";
$message .= "Description: " . $_POST["comments"] . "\n";


if( mail ('saleforce@mobiwhiz.com' , 'New Lead' , $message )) {
	echo 'done';
} else {
	echo 'fail';
}
