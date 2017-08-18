<?php 

namespace carregistration;

class carregistration
{
	function lookup($username,$endpoint,$regNumber,$state)
	{
		$xmlData = file_get_contents("https://www.regcheck.org.uk/api/reg.asmx/" . $endpoint . "?RegistrationNumber=" . $regNumber  ."&username=" . $username . "&state=" . $state);
		$xml=simplexml_load_string($xmlData);    
		$strJson = $xml->vehicleJson;    
		$json = json_decode($strJson);    
		return $json;
	}
}

?>