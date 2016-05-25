<?php
include_once './Openpay.php';
$openpay = Openpay::getInstance('m67tf4pypcwegcemnjor', 
  'sk_0ed7dfdadaea464abaf5f947080cd79a');

$chargeData = array(
    'method' => 'card',
    'source_id' => $_POST["token_id"],
    'amount' => (float)$_POST["amount"],
    'description' => $_POST["description"],
    'use_card_points' => $_POST["use_card_points"], // Opcional, si estamos usando puntos
    'device_session_id' => $_POST["deviceIdHiddenFieldName"]);

$charge = $openpay->charges->create($chargeData);
?>
