<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetCollectiveInvoiceList
{
    /**
     * @var Promidata_Service_DTO_ShowDescriptionItem[] $GetCollectiveInvoiceListResult
     * @access public
     */
    public $GetCollectiveInvoiceListResult = null;

    /**
     * @param Promidata_Service_DTO_ShowDescriptionItem[] $GetCollectiveInvoiceListResult
     * @access public
     */
    public function __construct($GetCollectiveInvoiceListResult)
    {
      $this->GetCollectiveInvoiceListResult = $GetCollectiveInvoiceListResult;
    }
}