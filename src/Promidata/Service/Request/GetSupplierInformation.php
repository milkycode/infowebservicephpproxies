<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_GetSupplierInformation
{
    /**
     * @var Promidata_Service_DTO_SupplierIdentifier $identifierV1
     * @access public
     */
    public $identifierV1 = null;

    /**
     * @param Promidata_Service_DTO_SupplierIdentifier $identifierV1
     * @access public
     */
    public function __construct($identifierV1)
    {
      $this->identifierV1 = $identifierV1;
    }
}