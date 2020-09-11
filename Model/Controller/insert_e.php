<?php
require_once('DBconnect.php');

if(isset($_POST['id']) && isset($_POST['pass'])){
    $i = $_POST['id'];
    $p = $_POST['pass'];
    $sql = " INSERT INTO employee VALUES ('$i','$p')";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_affected_rows($conn)){
        header("Location:show_employee.php");
    }
    else{
//        header("Location: login.php");
        echo"failed";
    }
}
?>