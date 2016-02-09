<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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