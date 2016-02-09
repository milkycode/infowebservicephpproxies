<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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