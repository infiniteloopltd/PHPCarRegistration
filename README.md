# PHPCarRegistration
A PHP Package to look up car registration information (Account required from www.vehicleregistrationapi.com)

#usage
```php
require_once 'vendor/autoload.php';

use carregistration\carregistration;

$conv = new carregistration;

$json = Lookup('***your username***','CheckUSA','H84jae','nj');
print_r($json->Description);    
```
