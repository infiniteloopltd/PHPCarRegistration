<?php

require_once 'vendor/autoload.php';

use carregistration\carregistration;

$reg = new carregistration;

$json = $reg->lookup('***your username***','CheckUSA','H84jae','nj');
print_r($json->Description);    

?>