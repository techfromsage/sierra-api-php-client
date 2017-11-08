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
echo "\n\n===== Query =====\n";
$query = new \Sierra\JsonQuery(['isbn' => '0080091032']);
var_export($query->toJSON());

echo "\n\n===== Query Results=====\n";
$results = $sierraAPI->bibs()->query($query);
var_export($results);


echo "\n\n===== Search AWS =====\n";
$results = $sierraAPI->bibs()->search('ISBN', '0080091032');
var_export($results);

echo "\n\n===== Single record =====\n";
$result = $sierraAPI->bibs()->getRecordByID(1000016);
var_export($result);

echo "\n\n===== Single record with variable length Fields =====\n";
$result = $sierraAPI->bibs()->getRecordByID(1000016, ['title','varFields']);
var_export($result);
