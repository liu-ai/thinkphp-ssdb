<?php
include(dirname(__FILE__) . '/SSDB.php');
$ssdb = new SimpleSSDB('127.0.0.1', 8888);
$resp = $ssdb->set('key', '123');
$resp = $ssdb->get('key');
var_dump($resp); // output: 123

