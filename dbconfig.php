<?php
$host ="localhost:3308";
$user ="root";
$psd ="";
$database="bookhub";


$conn= new mysqli($host , $user , $psd , $database);
 /*if($conn ==TRUE){
	
	echo "done ";
	
}else{
	
	die("unable to connect");
}*/


$conn->close();


?>
