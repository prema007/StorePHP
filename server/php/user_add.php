<?php
session_start();
include "config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if(true){
$stmt = $conn->prepare("INSERT INTO users VALUES ('',?,?,?)");
$stmt->bind_param('sss', $name, $email, $msg);

if($stmt->execute()){
}
} 
?>