<?php
include("httpful.phar");
//use Httpful\Request;
//define('BASE_URL', 'http://localhost/StorePHP/server/php');


if(isset($_GET['action']))
	$action = $_GET['action'];
else
	exit(0);
echo "action =" .$action;
if($action == "Add")
{
	$name = $_POST['name'];
    $email = $_POST$_POST['email'];
    $msg = $_POST['msg'];

	//echo BASE_URL;

    //$url = 'http://localhost:8022/StorePHP/server/php/user_add.php';
    $url = 'http://localhost:8022/StorePHP/server/php/user_add';
	$response = \Httpful\Request::post($url)
        ->sendsType(\Httpful\Mime::FORM)
        ->withoutStrictSsl()        // Ease up on some of the SSL checks
        ->expectsJson()
        ->parseWith(function($body) {return $body;})
		->body('name='.$name.'&email='.$email.'&msg='.$msg)
		->send();
    //echo $response;
    //print_r($response);
	$resp_array = json_decode(json_encode($response->body),true);
    echo $resp_array;

	/*if($resp_array['responseMessage']=='Success')
	{
		echo $resp_array['responseMessage'];
		return false;
	}*/
/*$data = array('name' => $name, 'email' => $email, 'msg' => $msg);
//step1
$cSession = curl_init();
//step2
curl_setopt($cSession,CURLOPT_URL,$url);

//curl_setopt($cSession,CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5
echo $result;*/
}

?>
