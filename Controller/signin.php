<?php
require_once('DBconnect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
    $u = $_POST['username'];
    $p = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$u' AND password = '$p'";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) !=0){
        header("Location: home.php");
    }
    else{
        header("Location: login.php");
    }
}
?>