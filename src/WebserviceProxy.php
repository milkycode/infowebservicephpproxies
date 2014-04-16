<?php
define('__ROOT__', dirname(__FILE__));

require_once 'WebserviceClasses.php';

class PromidataSoapClient extends SoapClient
{
	/**
	 * 
	 * @param mixed $wsdl
	 * @param array $options
	 */
	public function __construct($wsdl, $options){
		$url = parse_url($wsdl);
		if($url['port']){
			$this->_port = $url['port'];
		}	
		return parent::__construct($wsdl, $options);
	}

	/**
	 * (non-PHPdoc)
	 * @see SoapClient::__doRequest()
	 */
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

	/**
	 * 
	 * @param array $parts
	 * @return string
	 */
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

/**
 * 
 * @author Thomas Langer
 *
 */
interface ICustomerInfoService{
	/**
	 @brief Authenticate with your Promotional Office Login Data.	 
	 @detail Needs to be called at first access
	 @returns LogonResponse
	 @param[in] Logon $logon
		*/
	public function Logon($logon);

	/**
	@brief Retrieves a ProductInformation
	@returns GetProductInformationResponse
	@param[in] GetProductInformation $getProductInformation
	*/
	public function GetProductInformation($getProductInformation);	
	
	/**
	 * @brief Retrieves the product prices	 	
	 * @param[in] GetProductPrices $getProductPrices
	 * @return GetProductPricesResponse
	 */
	public function GetProductPrices($getProductPrices);	
	
	/**
	 @brief Returns the expected Stock Movement
	 @param[in] GetExpectedStockMovement $getExpectedStockMovement
	 @return GetExpectedStockMovementResponse
	 */
	public function GetExpectedStockMovement($getExpectedStockMovement);
	
	/**
	 * 
	 * @param[in] GetProductPriceList $getProductPriceList
	 * @return GetProductPricesResponse
	 */
	public function GetProductPriceList($getProductPriceList);
	/**
	 @brief Returns the information about a customer
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
	 * @brief Retrieves a list of user informations
	 * @param[in] GetUserInformation $getUserInformation
	 * @return GetUserInformationResponse
	 */
	public function GetUserInformation($getUserInformation);
	
	/**
	 * @Retrieves a customer price list
	 * @param[in] GetCustomerPriceList $getCustomerPriceList
	 * @return GetCustomerPriceListResponse
	 */
	public function GetCustomerPriceList($getCustomerPriceList);
	
	/**
	 * @
	 * @param[in] GetPossibleAutomaticConditionList $getPossibleAutomaticConditionList
	 * @return GetPossibleAutomaticConditionListResponse
	 */
	public function GetPossibleAutomaticConditionList($getPossibleAutomaticConditionList);
	
	/**
	 * @brief Returns a list of article numbers from articles inside a product group
	 * @param[in] GetArticleNumberListByArticleGroup $getArticleNumberListByArticleGroup
	 * @return GetArticleNumberListByArticleGroupResponse
	 */
	public function GetArticleNumberListByArticleGroup($getArticleNumberListByArticleGroup);
	
}

/**
 * \brief Proxy class for the Promotional Office Info Service
 
 * Use this proxy class to get access to the Promotional Office Info Webservice.
 *  
 * @author Thomas Langer
 *
 */
class CustomerInfoWebserviceProxy implements ICustomerInfoService{
	
	/**
	 * 
	 * @var PromidataSoapClient
	 */
	var $client;
	
	public function __construct($url){            
		$this->client = new PromidataSoapClient($url, array('exceptions'=>true, 
		'classmap' => array(
				'Logon' => 'Logon'
				
				, 'ArrayOfanyURI'=>'ArrayOfanyURI'
				, 'ArrayOfArticleTextItem'=>'ArrayOfArticleTextItem'
				, 'ArrayOfContactDetail' => 'ArrayOfContactDetail'
				, 'ArrayOfContactPersonInformation' => 'ArrayOfContactPersonInformation'
				, 'ArrayOfColorSizeCombination'=>'ArrayOfColorSizeCombination'			
				, 'ArrayOfCustomerInformation' => 'ArrayOfCustomerInformation'								
				, 'ArrayOfExpectedStockMovement' => 'ArrayOfExpectedStockMovement'				
				, 'ArrayOfPaymentInformation' => 'ArrayOfPaymentInformation'
				, 'ArrayOfProductPriceInformation' => 'ArrayOfProductPriceInformation'
				, 'ArrayOfShowDescriptionItem'=> 'ArrayOfShowDescriptionItem'
				, 'ArrayOfSimpleAddress' => 'ArrayOfSimpleAddress'
				, 'ArrayOfstring' => 'ArrayOfstring'				
				, 'ArrayOfTranslationItem' => 'ArrayOfTranslationItem'				
				, 'ArrayOfUserInformation' => 'ArrayOfUserInformation'
				, 'GetProductInformationRequest' => 'GetProductInformation'
				, 'GetProductInformationResponse' => 'GetProductInformationResponse'		
				, 'GetProductPricesRequest' => 'GetProductPrices'				
				, 'GetProductPricesResult' => 'GetProductPricesResult'
				, 'GetExpectedStockMovementRequest' => 'GetExpectedStockMovement'
				, 'GetExpectedStockMovementResponse' => 'GetExpectedStockMovementResponse'
				, 'GetProductPriceListRequest' => 'GetProductPriceList'
				, 'GetCustomerInformationRequest' => 'GetCustomerInformation'
				, 'GetCustomerInformationResponse' => 'GetCustomerInformationResponse'				
				, 'GetCustomerInformationListResponse' => 'GetCustomerInformationListResponse'
				, 'GetCustomerInformationListRequest' => 'GetCustomerInformationListRequest'				
				, 'GetProductPricesResponse' => 'GetProductPricesResponse'
				, 'GetProductPriceListResponse' => 'GetProductPriceListResponse'
				, 'GetUserInformationRequest' => 'GetUserInformation'
				, 'GetUserInformationResponse' => 'GetUserInformationResponse'
				, 'GetCustomerPriceListRequest' => 'GetCustomerPriceList'
				, 'GetCustomerPriceListResponse' => 'GetCustomerPriceListResponse'				
				, 'GetArticleNumberListByArticleGroupRequest' => 'GetArticleNumberListByArticleGroup'
				, 'GetArticleNumberListByArticleGroupResponse' => 'GetArticleNumberListByArticleGroupResponse'
				
				
				
				, 'CustomerIdentifier' => 'CustomerIdentifier'				
				, 'ProductIdentifier' => 'ProductIdentifier'				
								
				, 'ArticleTextItem' => 'ArticleTextItem'
				, 'ColorSizeCombination'=> 'ColorSizeCombination'
				, 'LogonResponse'=> 'LogonResponse'
				, 'ProductInformation' => 'ProductInformation'
				, 'ProductPriceInformation' => 'ProductPriceInformation'				
				, 'ShowDescriptionItem' => 'ShowDescriptionItem'
				, 'TranslationItem' => 'TranslationItem'
				, 'ExpectedStockMovement' => 'ExpectedStockMovement'
				, 'ExpectedStockMovementResponse' => 'ExpectedStockMovementResponse'				
				, 'CustomerInformation' => 'CustomerInformation'				
				, 'ContactDetail' => 'ContactDetail'
				, 'ContactPersonInformation' => 'ContactPersonInformation'
				, 'LocalizedItem' => 'LocalizedItem'
				, 'SimpleAddress' => 'SimpleAddress'
				, 'UserInformation' => 'UserInformation'				
				
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