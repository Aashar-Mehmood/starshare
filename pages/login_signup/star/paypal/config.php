<?php

// PayPal configuration 

define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 

$PAYPAL_RETURN_URL = 'http://localhost/starshare/pages/login_signup/star/paypal/success.php';

$PAYPAL_CURRENCY =  'USD';

$PAYPAL_URL = (PAYPAL_SANDBOX == true) ?
    "https://www.sandbox.paypal.com/cgi-bin/webscr" :
    "https://www.paypal.com/cgi-bin/webscr";