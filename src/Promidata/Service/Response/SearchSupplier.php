<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_SearchSupplier
{
    /**
     * @var Promidata_Service_DTO_SupplierSearchResult[] $SearchSupplierResult
     * @access public
     */
    public $SearchSupplierResult = null;

    /**
     * @param Promidata_Service_DTO_SupplierSearchResult[] $SearchSupplierResult
     * @access public
     */
    public function __construct($SearchSupplierResult)
    {
        $this->SearchSupplierResult = $SearchSupplierResult;
    }
}