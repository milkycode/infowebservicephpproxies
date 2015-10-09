<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetProductConfiguration
{
    /**
     * @var Promidata_Service_DTO_ProductConfiguration $GetProductConfigurationResult
     * @access public
     */
    public $GetProductConfigurationResult = null;

    /**
     * @param Promidata_Service_DTO_ProductConfiguration $GetProductConfigurationResult
     * @access public
     */
    public function __construct($GetProductConfigurationResult)
    {
      $this->GetProductConfigurationResult = $GetProductConfigurationResult;
    }
}