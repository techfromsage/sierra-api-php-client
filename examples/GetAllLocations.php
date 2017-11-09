<?php
/**
 * TODO: Is this a copy-paste leftover from a previous API ? Can it be removed?
 */
/**
 * An example of
 * TODO:  update with an example that you want timed.
 * This example also includes a timer and summary so that you can see how fast you are getting responses
 */

$appRoot = dirname(__FILE__);
include($appRoot . '/../vendor/autoload.php');

use Sierra\SierraAPI;
use SplitTimer\Timer;

$sierraAPI = new SierraAPI();
$sierraAPI->setClientID(getenv('SIERRA_CLIENT_ID'));
$sierraAPI->setClientSecret(getenv('SIERRA_CLIENT_SECRET'));
$sierraAPI->setBaseURL(getenv('SIERRA_API_BASE_URL'));

$overallTimer = new Timer();
$overallTimer->start();

$apiCounter      = 0;
$locationCounter = 0;

$apiTimer = new Timer();
$apiTimer->start();
$allLibraries = $sierraAPI->configuration()->libraries()->getAllLibraries();
$apiCounter++;
$apiTimer->split(); // records the time taken to make the API call

if (!empty($allLibraries->library)) {
    foreach ($allLibraries->library as $library) {
        $apiTimer->start(); // start our timer again
        $locations = $sierraAPI->configuration()->libraries()->getAllLocations($library->code);
        $apiCounter++;
        $apiTimer->split(); // again record the time taken for this API call

        if (!empty($locations->location)) {
            foreach ($locations->location as $location) {
                $locationCounter++;
                echo $locationCounter
                     . "::" . $library->code
                     . "::" . $location->code
                     . "::" . $location->external_name
                     . "\n";
            }
        }
    }
}

$overallTimer->stop();
echo "\n==== " . date('d/m/Y h:i:s a', time()) . "=====";
echo "\nTotal running time was " . round($overallTimer->elapsed(), 3) . ' seconds';
echo "\nTotal API calls made: {$apiCounter}";
echo "\nTotal Locations retrieved: {$locationCounter}";
echo "\nAverage time per call (mean): " . $apiTimer->meanSplit();
echo "\nAverage time per call (mode): " . $apiTimer->modeSplit() . ' seconds';
echo "\nFastest time: " . $apiTimer->fastest();
echo "\nSlowest time: " . $apiTimer->slowest();
echo "\n";
