<?php

// PayPal configuration 

define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 

$PAYPAL_RETURN_URL = 'http://localhost/myWork/starshare/pages/login_signup/star/paypal/success.php';
$PAYPAL_CANCEL_URL = "http://localhost/myWork/starshare/pages/login_signup/star/paypal/preview.php?sId=$sId&parentId=star";
$PAYPAL_CURRENCY =  'USD';

if ($_SERVER['SERVER_NAME'] !== 'localhost') {
    $PAYPAL_RETURN_URL = 'http://starshare.infinityfreeapp.com/pages/login_signup/star/paypal/success.php';
    $PAYPAL_CANCEL_URL = "http://starshare.infinityfreeapp.com/pages/login_signup/star/paypal/preview.php?sId=$sId&parentId=star";
}

$PAYPAL_URL = (PAYPAL_SANDBOX == true) ?
    "https://www.sandbox.paypal.com/cgi-bin/webscr" :
    "https://www.paypal.com/cgi-bin/webscr";
