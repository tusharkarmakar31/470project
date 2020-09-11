<?php
require_once('DBconnect.php');

if(isset($_POST['id']) && isset($_POST['password'])){
    $i = $_POST['id'];
    $p = $_POST['password'];
    $sql = "SELECT * FROM employee WHERE ID = '$i' AND password = '$p'";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) !=0){
//        header("Location: home.php");
        echo("Hello");
    }
    else{
//        header("Location: login.php");
        echo("bye");
    }
}
?>