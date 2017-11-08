<?php
$appRoot = dirname(dirname(__FILE__));
include($appRoot . '/vendor/autoload.php');

// TODO: put some examples in here.
// Examples should be run-able using `php examples.php` and echo useful illustrative info to the user

$sierraAPI = new \Sierra\SierraAPI();
$sierraAPI->setClientID(getenv('SIERRA_SANDBOX_CLIENT_ID'));
$sierraAPI->setClientSecret(getenv('SIERRA_SANDBOX_CLIENT_SECRET'));
$sierraAPI->setBaseURL(getenv('SIERRA_SANDBOX_BASE_URL'));

// bibs query
$query = new \Sierra\JsonQuery(['isbn' => '0123456789']);
$results = $sierraAPI->bibs()->query($query);

var_export($results);

