<?php

// curl example

$params = array('name' => 'kunal', 'surname' => 'roy', 'age' => 25);
$defaults = array(
	CURLOPT_URL => 'http://myremoteservice/',
	CURLOPT_POST => true, 
	CURLOPT_FIELDS => $params
);

$ch = curl_init();
$ch = curl_setopt_array($ch, ($options + $defaults) );
$result = curl_exec($ch);
curl_close($ch);


