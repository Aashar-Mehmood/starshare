<?php

// PayPal configuration 

define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 

$PAYPAL_RETURN_URL = 'http://localhost/myWork/starshare/pages/login_signup/organizer/paypal/success.php';
$PAYPAL_CANCEL_URL = "http://localhost/myWork/starshare/pages/login_signup/organizer/upcomingEvents.php?organizerId=$id&parentId=organizer";
$PAYPAL_NOTIFY_URL = 'http://localhost/myWork/starshare/pages/login_signup/organizer/paypal/ipn.php';


if ($_SERVER['SERVER_NAME'] !== 'localhost') {
    $PAYPAL_RETURN_URL = 'http://starshare.infinityfreeapp.com/pages/login_signup/organizer/paypal/success.php';
    $PAYPAL_CANCEL_URL = "http://starshare.infinityfreeapp.com/pages/login_signup/organizer/upcomingEvents.php?organizerId=$id&parentId=organizer";
    $PAYPAL_NOTIFY_URL = 'http://starshare.infinityfreeapp.com/pages/login_signup/organizer/paypal/ipn.php';
}



$PAYPAL_CURRENCY =  'USD';

$PAYPAL_URL = (PAYPAL_SANDBOX == true) ?
    "https://www.sandbox.paypal.com/cgi-bin/webscr" :
    "https://www.paypal.com/cgi-bin/webscr";
