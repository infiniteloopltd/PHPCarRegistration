# PHPCarRegistration
A PHP Package to look up car registration information (Account required from www.vehicleregistrationapi.com)

## Usage
```php
require_once 'vendor/autoload.php';

use carregistration\carregistration;

$conv = new carregistration;

$json = $conv->lookup('***your username***','CheckUSA','H84jae','nj');
print_r($json->Description);    
```

## Parameters

The function "lookup" returns an associative array that differs by country, but maintains consistency where possible. 
It accepts four parameters, being username, endpoint, registration number and state, in that order.

The username is that which is used on www.vehicleregistrationapi.com 

The endpoint specifies the country to be searched, and must be one of the following.

* Check (UK)
* CheckBelgium 
* CheckCroatia 
* CheckCzechRepublic 
* CheckDenmark 
* CheckEstonia 
* CheckFinland 
* CheckFrance 
* CheckHungary 
* CheckIndia 
* CheckIreland 
* CheckItaly 
* CheckNetherlands 
* CheckNewZealand 
* CheckNigeria 
* CheckNorway 
* CheckPortugal 
* CheckRussia 
* CheckSlovakia 
* CheckSouthAfrica 
* CheckSpain 
* CheckSriLanka 
* CheckSweden 
* CheckUAE 
* CheckUSA 
* CheckAustralia

The state parameter is only used for USA and Australia, and can be left empty for all other countries.
