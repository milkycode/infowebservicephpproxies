<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetProductInformation
{
    /**
     * @var Promidata_Service_DTO_ProductInformation $GetProductInformationResult
     * @access public
     */
    public $GetProductInformationResult = null;

    /**
     * @param Promidata_Service_DTO_ProductInformation $GetProductInformationResult
     * @access public
     */
    public function __construct($GetProductInformationResult)
    {
        $this->GetProductInformationResult = $GetProductInformationResult;
    }
}