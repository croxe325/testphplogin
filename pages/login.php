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

}  
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="POST" action="../index.php">

                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>

                <button>Log In</button>
                
                <p> Belum punya akun?
                  <a href="daftar.php">Daftar di sini</a>
                </p>
                <?php echo "<a href='".$client->createAuthUrl()."'>Login With Google</a>"; ?>
            </form>
        </div>
    </body>
</html>