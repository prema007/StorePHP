<?php
include "config.php";
$id = $_GET['id'];
if(isset($_GET['id'])){
$stmt = $conn->prepare("delete from users where id=:id");
$stmt->bindParam(":id",$id,PDO::PARAM_INT);
if($stmt->execute()){
}}



