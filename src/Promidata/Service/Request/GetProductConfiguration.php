<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_GetProductConfiguration
{
    /**
     * @var Promidata_Service_DTO_GetProductConfigurationParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetProductConfigurationParameter $parameter
     * @access public
     */
    public function __construct(Promidata_Service_DTO_GetProductConfigurationParameter $parameter)
    {
      $this->parameter = $parameter;
    }
}