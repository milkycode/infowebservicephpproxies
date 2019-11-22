<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetSupplierInformation
{
    /**
     * @var Promidata_Service_DTO_SupplierInformation $GetSupplierInformationResult
     * @access public
     */
    public $GetSupplierInformationResult = null;

    /**
     * @param Promidata_Service_DTO_SupplierInformation $GetSupplierInformationResult
     * @access public
     */
    public function __construct($GetSupplierInformationResult)
    {
      $this->GetSupplierInformationResult = $GetSupplierInformationResult;
    }
}