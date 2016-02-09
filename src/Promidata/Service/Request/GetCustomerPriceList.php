<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_GetCustomerPriceList
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $identifier
     * @access public
     */
    public $identifier = null;

    /**
     * @param Promidata_Service_DTO_CustomerIdentifier $identifier
     * @access public
     */
    public function __construct(Promidata_Service_DTO_CustomerIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }
}