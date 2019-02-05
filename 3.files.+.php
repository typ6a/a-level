<?php

$xmlfile = file_get_contents('persons.xml');
$obj = simplexml_load_string($xmlfile);
$json  = json_encode($obj);
$data = json_decode($json, true);
echo (var_dump($data));



// $xmlstring = readfile('persons.xml');
// $xml = simplexml_load_string($xmlstring, "SimpleXMLElement", LIBXML_NOCDATA);
// $json = json_encode($xml);
// $array = json_decode($json,TRUE);
// var_dump($array);