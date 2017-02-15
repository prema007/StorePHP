<?php
include "config.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $name=$_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    

$stmt = $conn->prepare("update users set name=?, email=?, msg=? where id=?");

$stmt->bind_param('ssss', $name, $email, $msg, $id);
    
if($stmt->execute()){
}
}
?>
