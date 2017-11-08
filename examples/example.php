<?php
$appRoot = dirname(__FILE__);
include($appRoot . '/../vendor/autoload.php');

// TODO: put some examples in here.
// Examples should be run-able using `php examples.php` and echo useful illustrative info to the user

$sierraAPI = new \Sierra\SierraAPI();
$sierraAPI->setClientID(getenv('SIERRA_CLIENT_ID'));
$sierraAPI->setClientSecret(getenv('SIERRA_CLIENT_SECRET'));
$sierraAPI->setBaseURL('http://sandbox.iii.com/iii/sierra-api/v4');

// bibs query
$query = new \Sierra\JsonQuery(['isbn' => '0123456789']);
$results = $sierraAPI->bibs()->query($query);

var_export($results);

