<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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