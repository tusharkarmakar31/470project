<?php

require_once('DBconnect.php');
    $i = $_POST['id'];
    $f = $_POST['fname'];
    $l = $_POST['lname'];
    $d = $_POST['date'];
    $p = $_POST['pos'];

if($f!=""){

$sql = "UPDATE `army` SET `First Name`='$f' WHERE ID=$i";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
	header ("Location: show_army.php");
}

else{
	
header ("Location: update_army.php");
}	
}
    

if($l!=""){

$sql = "UPDATE `army` SET `Last Name`='$l' WHERE ID=$i";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
	header ("Location: show_army.php");
}

else{
	
header ("Location: update_army.php");
}	
}


if($d!=""){

$sql = "UPDATE `army` SET `Joining Date`='$d' WHERE ID=$i";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
	header ("Location: show_army.php");
}

else{
	
header ("Location: update_army.php");
}	
}


if($p!=""){

$sql = "UPDATE `army` SET `Position`='$p' WHERE ID=$i";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
	header ("Location: show_army.php");
}

else{
	
header ("Location: update_army.php");
}	
}


?>

