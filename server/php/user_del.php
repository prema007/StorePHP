<?php
include "config.php";
if(isset($_GET['id'])){
$stmt = $conn->prepare("delete from users where id=?");
$stmt->bind_param('s', $id);

$id = $_GET['id'];

if($stmt->execute()){
}}
