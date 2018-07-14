<?php
require_once __DIR__ . '/../vendor/autoload.php';

$arrCredentials = array(
   'username' => 'changeme',
   'password' => 'changeme'
);

try {
   $objGarminConnect = new \garmin\GarminConnect($arrCredentials);

   $objResults = $objGarminConnect->getActivityList(0, 1);
   print_r($objResults);

} catch (Exception $objException) {
   echo "Oops: " . $objException;
}
