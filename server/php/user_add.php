<?php
session_start();
include "config.php";
header('Content-Type: application/json');
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if(true){
//$stmt = $conn->prepare("INSERT INTO users VALUES ('',?,?,?)");
    $stmt = $conn->prepare("INSERT INTO users (name, email, msg)
    VALUES (:name, :email, :msg)");



$stmt->bindParam(':name',$name,PDO::PARAM_STR);
$stmt->bindParam(':email',$email,PDO::PARAM_STR);
$stmt->bindParam(':msg',$msg,PDO::PARAM_STR);

//$conn->exec($stmt);
//$stmt -> execute();
//$stmt->bind_param('sss', $name, $email, $msg);

if($stmt->execute()){
    echo json_encode(array('responseMessage' =>'Success'));
    return false;
}

} 
?>





<!--$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$address= $_POST['address'];
$email= $_POST['email'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO student (fname, mname, lname, address, email)
VALUES ('$fname', '$mname', '$lname', '$address', '$email')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='index.php'</script>";-->
