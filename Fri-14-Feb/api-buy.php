<?php
$sFromPhone = '25850567';
$sToPhone  = '25850567';
$sMessage = urlencode('Thank: '.$_POST['txtAirlineName']);
$sApiKey = 'IGbfiPPX74MynwibPXq707msvl1AEVfFt2pz36CXy3rIw1cagU';
echo file_get_contents("https://fatsms.com/apis/api-send-sms?to-phone=25850567&message=$sMessage&from-phone=25850567&api-key=IGbfiPPX74MynwibPXq707msvl1AEVfFt2pz36CXy3rIw1cagU");
