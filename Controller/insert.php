<?php
require_once('DBconnect.php');

if(isset($_POST['id']) && isset($_POST['fname'])&& isset($_POST['lname'])&& isset($_POST['date'])
  && isset($_POST['pos'])){
    $i = $_POST['id'];
    $f = $_POST['fname'];
    $l = $_POST['lname'];
    $d = $_POST['date'];
    $p = $_POST['pos'];
    $sql = " INSERT INTO army VALUES ('$i','$f','$l','$d','$p')";
    
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