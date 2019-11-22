<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
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