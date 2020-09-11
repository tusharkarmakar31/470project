<?php

require_once('DBconnect.php');
    $i = $_POST['id'];
    $p = $_POST['pass'];

if($p!=""){

$sql = "UPDATE `employee` SET `password`='$p' WHERE ID=$i";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
	header ("Location: show_employee.php");
}

else{
	
header ("Location: update_employee.php");
}	
}
    




?>

