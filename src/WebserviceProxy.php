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
	 @param[in] LogonRequest $logonRequest
		*/
	public function Logon($logonRequest);

	/**
	@brief Retrieves a ProductInformation.
	@returns GetProductInformationResponse
	@param[in] GetProductInformationRequest $getProductInformationRequest
	*/
	public function GetProductInformation($getProductInformationRequest);	
	
	/**
	 * @brief Returns the price relays of a product for a specific customer.
	 * It takes care on special prices for the given customer 	
	 * @param[in] GetProductPricesRequest $getProductPricesRequest
	 * @return GetProductPricesResponse
	 */
	public function GetProductPrices($getProductPricesRequest);	
	
	/**
	 @brief Returns the expected stock movements of a specific product.
	 @param[in] GetExpectedStockMovementRequest $getExpectedStockMovementRequest
	 @return GetExpectedStockMovementResponse
	 */
	public function GetExpectedStockMovement($getExpectedStockMovementRequest);
	
	/**
	 * @brief Returns the price relays of a product.
	 * @param[in] GetProductPriceListRequest $getProductPriceListRequest
	 * @return GetProductPricesResponse
	 */
	public function GetProductPriceList($getProductPriceListRequest);
	/**
	 @brief Returns information about a customer
	 * @param[in] GetCustomerInformationRequest $getCustomerInformationRequest
	 * @return GetCustomerInformationResponse
	 */
	public function GetCustomerInformation($getCustomerInformationRequest);
	/**
	 * @brief Returns a list of customer informations of customers which has changed since given datetime.
	 * @param[in] GetCustomerInformationListRequest $getCustomerInformationListRequest
	 * return GetCustomerInformationListResponse
	 */
	public function GetCustomerInformationList($getCustomerInformationListRequest);
	
	/**
	 * @brief Returns a list of user informations
	 * @param[in] GetUserInformationRequest $getUserInformationRequest
	 * @return GetUserInformationResponse
	 */
	public function GetUserInformation($getUserInformationRequest);
	
	/**
	 * @brief Returns a price information list for a Customer
	 * @param[in] GetCustomerPriceListRequest $getCustomerPriceListRequest
	 * @return GetCustomerPriceListResponse
	 */
	public function GetCustomerPriceList($getCustomerPriceListRequest);
	
	/**
	 * @brief Returns a list of possible automatic conditions for the given constellation 
	 * @param[in] GetPossibleAutomaticConditionListRequest $getPossibleAutomaticConditionListRequest
	 * @return GetPossibleAutomaticConditionListResponse
	 */
	public function GetPossibleAutomaticConditionList($getPossibleAutomaticConditionListRequest);
	
	/**
	 * @brief Returns a list of articlenumbers of products inside a specified product group
	 * @param[in] GetArticleNumberListByArticleGroupRequest $getArticleNumberListByArticleGroupRequest
	 * @return GetArticleNumberListByArticleGroupResponse
	 */
	public function GetArticleNumberListByArticleGroup($getArticleNumberListByArticleGroupRequest);
	
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
				'LogonRequest' => 'Logon'
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

	public function Logon($logonRequest){
		return $this->client->Logon($logonRequest);
	}

	public function GetProductInformation($getProductInformationRequest){
		return $this->client->GetProductInformation($getProductInformationRequest);
	}

	public function GetProductPrices($getProductPricesRequest){
		return $this->client->GetProductPrices($getProductPricesRequest);		
	}

	public function GetExpectedStockMovement($getExpectedStockMovementRequest){
		return $this->client->GetExpectedStockMovement($getExpectedStockMovementRequest);		
	}

	public function GetProductPriceList($getProductPriceListRequest){
		return $this->client->GetProductPriceList($getProductPriceListRequest);
	}

	public function GetCustomerInformation($getCustomerInformationRequest){
		return $this->client->GetCustomerInformation($getCustomerInformationRequest);
	}

	public function GetCustomerInformationList($getCustomerInformationListRequest){
		return $this->client->GetCustomerInformationList($getCustomerInformationListRequest);
	}

	public function GetUserInformation($getUserInformationRequest){
		return $this->client->GetUserInformation($getUserInformationRequest);
	}

	public function GetCustomerPriceList($getCustomerPriceListRequest){
		return $this->client->GetCustomerPriceList($getCustomerPriceListRequest);
	}

	public function GetPossibleAutomaticConditionList($getPossibleAutomaticConditionListRequest){
		return $this->client->GetPossibleAutomaticConditionList($getPossibleAutomaticConditionListRequest);
	}

	public function GetArticleNumberListByArticleGroup($getArticleNumberListByArticleGroupRequest){
		return $this->client->GetArticleNumberListByArticleGroup($getArticleNumberListByArticleGroupRequest);
	}
}
	
?>