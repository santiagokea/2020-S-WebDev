<?php
$sName = $_POST['name'];
require_once('validator.php');
if( ! isStringValid($sName, 2, 5) ){
  echo 'error';
}


