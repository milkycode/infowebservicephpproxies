<?php
define('__ROOT__', dirname(__FILE__));

require_once 'WebserviceClasses.php';

class My_SoapClient extends SoapClient
{
	public function __construct($wsdl, $options){
		$url = parse_url($wsdl);
		if($url['port']){
			$this->_port = $url['port'];
		}	
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

interface IInfoService{
	/**
	 @brief User Logon
	 	
	 @detail Needs to be called at first access
	 @returns LogonResponse
	 @param[in] Logon $logon
		*/
	public function Logon($logon);

	/**
	@returns GetProductInformationResponse
	@param[in] GetProductInformation $getProductInformation
	*/
	public function GetProductInformation($getProductInformation);	
	
	/**
	 * 
	 * @param[in] GetProductPrices $getProductPrices
	 * @return GetProductPricesResponse
	 */
	public function GetProductPrices($getProductPrices);	
	
	/**
	 * 
	 * @param[in] GetExpectedStockMovement $getExpectedStockMovement
	 * @return GetExpectedStockMovementResponse
	 */
	public function GetExpectedStockMovement($getExpectedStockMovement);
	
	/**
	 * 
	 * @param[in] GetProductPriceList $getProductPriceList
	 * @return GetProductPricesResponse
	 */
	public function GetProductPriceList($getProductPriceList);
	/**
	 * 
	 * @param[in] GetCustomerInformation $getCustomerInformation
	 * @return GetCustomerInformationResponse
	 */
	public function GetCustomerInformation($getCustomerInformation);
	/**
	 * 
	 * @param[in] GetCustomerInformationList $getCustomerInformationList
	 * return GetCustomerInformationListResponse
	 */
	public function GetCustomerInformationList($getCustomerInformationList);
	
	/**
	 * 
	 * @param[in] GetUserInformation $getUserInformation
	 * @return GetUserInformationResponse
	 */
	public function GetUserInformation($getUserInformation);
	/**
	 * 
	 * @param[in] GetCustomerPriceList $getCustomerPriceList
	 * @return GetCustomerPriceListResponse
	 */
	public function GetCustomerPriceList($getCustomerPriceList);
	
	/**
	 * 
	 * @param[in] GetPossibleAutomaticConditionList $getPossibleAutomaticConditionList
	 * @return GetPossibleAutomaticConditionListResponse
	 */
	public function GetPossibleAutomaticConditionList($getPossibleAutomaticConditionList);
	
	/**
	 * 
	 * @param[in] GetArticleNumberListByArticleGroup $getArticleNumberListByArticleGroup
	 * @return GetArticleNumberListByArticleGroupResponse
	 */
	public function GetArticleNumberListByArticleGroup($getArticleNumberListByArticleGroup);
	
}

class WebserviceProxy implements IInfoService{
	
	public function __construct($url){            
		$this->client = new My_SoapClient($url, array('exceptions'=>true, 
		'classmap' => array(
				'Logon' => 'Logon'
				, 'LogonResponse'=> 'LogonResponse'
				, 'ProductInformation' => 'ProductInformation'
				, 'GetProductInformation' => 'GetProductInformation'
				, 'GetProductInformationResponse' => 'GetProductInformationResponse'		
				, 'ArticleTextItem' => 'ArticleTextItem'
				, 'ShowDescriptionItem' => 'ShowDescriptionItem'
				, 'ColorSizeCombination' => 'ColorSizeCombination'
				, 'TranslationItem' => 'TranslationItem'
				, 'ProductPriceInformation' => 'ProductPriceInformation'
				, 'CustomerIdentifier' => 'CustomerIdentifier'				
				, 'ProductIdentifier' => 'ProductIdentifier'
				, 'GetProductPrices' => 'GetProductPrices'				
				, 'GetProductPricesResponse' => 'GetProductPricesResponse'
				, 'GetProductPricesResult' => 'GetProductPricesResult'						
			)));	    
	}
	
	public function Logon($logon){
		return $this->client->Logon($logon);
	}
	
	public function GetProductInformation($getProductInformation){
		return $this->client->GetProductInformation($getProductInformation);
	}
	
	public function GetProductPrices($getProductPrices){
		return $this->client->GetProductPrices($getProductPrices);		
	}
	
	public function GetExpectedStockMovement($getExpectedStockMovement){
		return $this->client->GetExpectedStockMovement($getExpectedStockMovement);		
	}
	
	public function GetProductPriceList($getProductPriceList){
		return $this->client->GetProductPriceList($getProductPriceList);
	}
	
	public function GetCustomerInformation($getCustomerInformation){
		return $this->client->GetCustomerInformation($getCustomerInformation);
	}
	
	public function GetCustomerInformationList($getCustomerInformationList){
		return $this->client->GetCustomerInformationList($getCustomerInformationList);
	}
	
	public function GetUserInformation($getUserInformation){
		return $this->client->GetUserInformation($getUserInformation);
	}
	
	public function GetCustomerPriceList($getCustomerPriceList){
		return $this->client->GetCustomerPriceList($getCustomerPriceList);
	}
	
	public function GetPossibleAutomaticConditionList($getPossibleAutomaticConditionList){
		return $this->client->GetPossibleAutomaticConditionList($getPossibleAutomaticConditionList);
	}
	
	public function GetArticleNumberListByArticleGroup($getArticleNumberListByArticleGroup){
		return $this->client->GetArticleNumberListByArticleGroup($getArticleNumberListByArticleGroup);
	}
}
	
?>