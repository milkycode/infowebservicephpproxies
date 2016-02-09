<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_GetCustomerInformation
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $identifierV1
     * @access public
     */
    public $identifierV1 = null;

    /**
     * @param Promidata_Service_DTO_CustomerIdentifier $identifierV1
     * @access public
     */
    public function __construct(Promidata_Service_DTO_CustomerIdentifier $identifierV1)
    {
        $this->identifierV1 = $identifierV1;
    }
}