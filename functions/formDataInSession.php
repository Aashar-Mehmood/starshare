<?php
$formData = array();
function formDataInSession($name, $value)
{
    global $formData;
    if (!empty($value)) {
        $formData[$name] = $value;
    }
}

foreach ($_POST as $key => $value) {
    formDataInSession($key, $value);
}

if (!empty($formData)) {
    $_SESSION['form_data'] = $formData;
}

// print_r($_SESSION['form_data']);
// exit();
