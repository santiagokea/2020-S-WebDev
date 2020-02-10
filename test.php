<?php
$sSearchFor = 'B';
$sData = file_get_contents('data.json');
$jData = json_decode($sData);
foreach($jData->cities as $jCity){
  echo "<div>$jCity->name</div>";
  if( stripos($jCity->name, $sSearchFor) !== false ){
    echo "<div>MATCH FOUND</div>";
  }
}




