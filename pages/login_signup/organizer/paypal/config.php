<?php

// PayPal configuration 

define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 

$PAYPAL_RETURN_URL = 'http://localhost/starshare/pages/login_signup/organizer/paypal/success.php';
$PAYPAL_CANCEL_URL = 'http://localhost/starshare/pages/login_signup/organizer/paypal/cancel.php';
$PAYPAL_NOTIFY_URL = 'http://localhost/starshare/pages/login_signup/organizer/paypal/ipn.php';

$PAYPAL_CURRENCY =  'USD';

$PAYPAL_URL = (PAYPAL_SANDBOX == true) ?
    "https://www.sandbox.paypal.com/cgi-bin/webscr" :
    "https://www.paypal.com/cgi-bin/webscr";