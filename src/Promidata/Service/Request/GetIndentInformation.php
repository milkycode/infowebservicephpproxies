<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Request_GetIndentInformation
{
    /**
     * @var Promidata_Service_DTO_GetIndentInformationParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetIndentInformationParameter $parameter
     * @access public
     */
    public function __construct(Promidata_Service_DTO_GetIndentInformationParameter $parameter)
    {
      $this->parameter = $parameter;
    }
}