<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
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