<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_PurchaseOrderAction
{
    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @access public
     * @var string $Name
     */
    public function __construct($Name = null)
    {
        $this->Name = $Name;
    }
}