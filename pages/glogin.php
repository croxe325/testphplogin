<?php

require_once 'C:\xampp\htdocs\login\vendor\autoload.php'; 

$clientID='200990820895-bj92nb3bv3en5juee3uvqcpn23qbr411.apps.googleusercontent.com';
$clientSecret='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';
$redirectUrl = 'http://localhost/login/pages/glogin.php';

// membuat client request ke google
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);
$client->addScope('profile');
$client->addScope('email');

if (isset($_GET['code'])){
$token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
$client->setAccessToken($token);
$gauth = new Google_Service_Oauth2($client);
$google_info = $gauth->userinfo->get();
$email = $google_info->email;
$name = $google_info->name;

echo "Selamat Datang " .$name."Kamu telah terdaftar menggunakan email: " .$email;
}else{
    
    echo "<a href='".$client->createAuthUrl()."'>Login With Google</a>";
}  
?>