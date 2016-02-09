<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetDeliveryTermList
{
    /**
     * @var Promidata_Service_DTO_LocalizedItem[] $GetDeliveryTermListResult
     * @access public
     */
    public $GetDeliveryTermListResult = null;

    /**
     * @param Promidata_Service_DTO_LocalizedItem[] $GetDeliveryTermListResult
     * @access public
     */
    public function __construct($GetDeliveryTermListResult)
    {
      $this->GetDeliveryTermListResult = $GetDeliveryTermListResult;
    }
}