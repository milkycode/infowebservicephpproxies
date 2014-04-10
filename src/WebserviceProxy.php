<?php
define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/soaptest.php');

class WebserviceProxy implements IInfoService{
	public function __construct($url){            
		$this->client = new My_SoapClient($url, array('exceptions'=>true));	    
	}
	
	public function Logon($logon){
		return $this->client->Logon($logon);
	}
	
	public function GetProductInformation($getProductInformation){
		return $this->client->GetProductInformation($getProductInformation);
	}
}
	
class My_SoapClient extends SoapClient
{
	public function __construct($wsdl, $options){
		$url = parse_url($wsdl);
		if($url['port']){
		$this->_port = $url['port'];
		}
		$options = array($options, 
		'classmap' => array(
			'Logon' => 'Logon'
			, 'LogonResponse'=> 'LogonResponse'
			, 'ProductInformation' => 'ProductInformation'
			, 'GetProductInformation' => 'GetProductInformation'
			, 'GetProductInformationResponse' => 'GetProductInformationResponse'
			
			));
		return parent::__construct($wsdl, $options);
	}

	public function __doRequest($request, $location, $action, $version)
	{
		$parts = parse_url($location);
		if($this->_port) {
		$parts['port'] = $this->_port;
		}
		$location = $this->buildLocation($parts);
		$result = parent::__doRequest($request, $location, $action, $version);
		return $result;
	}

	public function buildLocation($parts = array()) {
		$location = '';
		if(isset($parts['scheme'])){
		$location .= $parts['scheme'].'://';
		}
		if(isset($parts['user']) || isset($parts['pass']))
		{
		$location .= $parts['user'].':'.$parts['pass'].'@';
		}
		$location .= $parts['host'];
		if(isset($parts['port'])) {
		$location .= ':'.$parts['port'];
		}
		$location .= $parts['path'];
		if(isset($parts['query'])){
		$location .='?'.$parts['query'];
		}
		return $location;
	}
}
?>