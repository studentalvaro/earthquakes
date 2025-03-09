<?php
$xml_data = file_get_contents('https://www.ign.es/ign/RssTools/sismologia.xml');

$xml_object = simplexml_load_string($xml_data);

$json_data = json_encode($xml_object, JSON_PRETTY_PRINT);

header('Content-Type: application/json');

echo $json_data;

?>