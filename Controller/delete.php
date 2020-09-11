<?php
require_once('DBconnect.php');

if(isset($_POST['id'])){
    $i = $_POST['id'];
    $sql = " DELETE FROM army WHERE id='$i'";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_affected_rows($conn)){
        header("Location:show_army.php");
    }
    else{
//        header("Location: login.php");
        echo"failed";
    }
}
?>