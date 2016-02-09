<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetProductInformationByProductIdentifier
{
    /**
     * @var Promidata_Service_DTO_ProductInformation $GetProductInformationByProductIdentifierResult
     * @access public
     */
    public $GetProductInformationByProductIdentifierResult = null;

    /**
     * @param Promidata_Service_DTO_ProductInformation $GetProductInformationByProductIdentifierResult
     * @access public
     */
    public function __construct($GetProductInformationByProductIdentifierResult)
    {
        $this->GetProductInformationByProductIdentifierResult = $GetProductInformationByProductIdentifierResult;
    }
}