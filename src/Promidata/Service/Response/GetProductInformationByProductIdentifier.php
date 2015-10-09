<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetProductInformationByProductIdentifier
{
    /**
     * @var ProductInformation $GetProductInformationByProductIdentifierResult
     * @access public
     */
    public $GetProductInformationByProductIdentifierResult = null;

    /**
     * @param ProductInformation $GetProductInformationByProductIdentifierResult
     * @access public
     */
    public function __construct($GetProductInformationByProductIdentifierResult)
    {
      $this->GetProductInformationByProductIdentifierResult = $GetProductInformationByProductIdentifierResult;
    }
}