<?php
$sKey = $_GET['key'];
// Connect to the DB
// Open the file
$sData = file_get_contents('data.json');
// Convert the content into JSON
$jData = json_decode($sData);
// Check if the key matches
// if so, flip the verified to 1
// else show error message
if($sKey == $jData->key){
  $jData->verified = 1;
  $sData = json_encode($jData);
  file_put_contents('data.json', $sData);
  echo 'Now you can login';
  exit();
}

echo 'ERROR - CANNOT VERIFY';






