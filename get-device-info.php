<?php

// Create a PHP associative array
$data = array(
    'firmware_version' => '0.1',
	'mode' => 'STATION',
    'device_ip' => '192.168.2.132',
    'mac_address' => '2A::3B::4C::5D::6E::7F',
    'server_mode' => 'DHCP',
    'ssid' => 'rms-ssid'
);

// Convert the PHP array to JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Output the JSON data
echo $jsonData;

?>
