<?php
if( !isset($_POST['txtAirlineName']) ||
  strlen($_POST['txtAirlineName']) < 2
){
  echo 'Airline name must be at least 2 chars';
  exit();
}


$sFromPhone = '25850567';
$sToPhone  = '25850567';
$sApiKey = 'IGbfiPPX74MynwibPXq707msvl1AEVfFt2pz36CXy3rIw1cagU';
$sMessage = urlencode('Thank: '.$_POST['txtAirlineName']);
if( strlen($sMessage) > 100 ){
  echo 'Message is too long';
  exit();
}

echo file_get_contents("https://fatsms.com/apis/api-send-sms?to-phone=25850567&message=$sMessage&from-phone=25850567&api-key=IGbfiPPX74MynwibPXq707msvl1AEVfFt2pz36CXy3rIw1cagU");

