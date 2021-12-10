<?php

//start session on web page
if(!isset($_SESSION)) 
{ 
        session_start(); 
}

//config.php

//Include Google Client Library for PHP autoload file
require_once './vendor/autoload.php';




//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('301467962566-0851ch2a62ousv8pi9edk1uv1s8n09p5.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('9kZt4eJ6h3QYBagzImezcUVs');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://demo.local.com/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>