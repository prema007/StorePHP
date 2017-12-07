<?php
include "config.php";

try {
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $name=$_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    
$stmt = $conn->prepare("UPDATE `users`
   SET `name` = :name,
       `email` = :email,
       `msg` = :msg

 WHERE `id` = :id ");



$stmt->bindParam(':name',$name,PDO::PARAM_STR);
$stmt->bindParam(':email',$email,PDO::PARAM_STR);
$stmt->bindParam(':msg',$msg,PDO::PARAM_STR);
$stmt->bindParam(':id',$id,PDO::PARAM_INT);
//$stmt = $conn->prepare("update users set name, email=?, msg=? where id=?");

//$stmt->bind_param('ssss', $name, $email, $msg, $id);
    
$stmt->execute();

}
}
catch(PDOException $e) {
  echo $e->getMessage();
}

?>
