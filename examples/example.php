<?php
$appRoot = dirname(dirname(__FILE__));
include($appRoot . '/vendor/autoload.php');

// Examples should be run-able using `php examples.php` and echo useful illustrative info to the user

$sierraAPI = new \Sierra\SierraAPI();
$sierraAPI->setClientID(getenv('SIERRA_SANDBOX_CLIENT_ID'));
$sierraAPI->setClientSecret(getenv('SIERRA_SANDBOX_CLIENT_SECRET'));
$sierraAPI->setBaseURL(getenv('SIERRA_SANDBOX_BASE_URL'));

//////////
//// Bibs
echo "\n\n===== Bibs Query =====\n";
$query = new \Sierra\JsonQuery();
$query->addIsbn('0080091032');
var_export($query->toJSON());

echo "\n\n===== Bibs Query Results=====\n";
$results = $sierraAPI->bibs()->query($query);
var_export($results);

echo "\n\n===== Bibs Search AWS =====\n";
$results = $sierraAPI->bibs()->search('ISBN', '0080091032');
var_export($results);

echo "\n\n===== Bibs Single MARC record =====\n";
$result = $sierraAPI->bibs()->getMarcRecordByID(1000016);
var_export($result);

echo "\n\n===== Bibs Single record with variable length Fields =====\n";
$result = $sierraAPI->bibs()->getRecordByID(1000016, ['title','varFields']);
var_export($result);

////////
// Items
echo "\n\n===== Items search =====\n";
$results = $sierraAPI->items()->getItemsByBibId('1000025');
var_export($results);

echo "\n\n===== This client instance will return XML by default =====\n";
$sierraAPI2 = new \Sierra\SierraAPI();
$sierraAPI2->setClientID(getenv('SIERRA_SANDBOX_CLIENT_ID'));
$sierraAPI2->setClientSecret(getenv('SIERRA_SANDBOX_CLIENT_SECRET'));
$sierraAPI2->setBaseURL(getenv('SIERRA_SANDBOX_BASE_URL'));
$sierraAPI2->setDefaultAcceptContentType('application/xml');

$results = $sierraAPI2->bibs()->getRecordByID(1000016);
var_export($results);
