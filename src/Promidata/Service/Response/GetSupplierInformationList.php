<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetSupplierInformationList
{
    /**
     * @var Promidata_Service_DTO_SupplierInformation[] $GetSupplierInformationListResult
     * @access public
     */
    public $GetSupplierInformationListResult = null;

    /**
     * @param Promidata_Service_DTO_SupplierInformation[] $GetSupplierInformationListResult
     * @access public
     */
    public function __construct($GetSupplierInformationListResult)
    {
        $this->GetSupplierInformationListResult = $GetSupplierInformationListResult;
    }
}