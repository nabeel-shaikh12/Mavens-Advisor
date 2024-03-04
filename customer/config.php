<?php
// session_start();

require_once '../vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('803596827102-p7g7e8v6tkguhrsftlg7pdft1mr6eu48.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri('http://localhost/mavens%20advisor/customer/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');
?>