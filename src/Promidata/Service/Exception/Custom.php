<?php
/**
 * Custom Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Exception_Custom
{
    /**
     * @var string $any
     * @access public
     */
    public $any = null;

    /**
     * @var QName $FactoryType
     * @access public
     */
    public $FactoryType = null;

    /**
     * @param string $any
     * @param QName $FactoryType
     * @access public
     */
    public function __construct($any, $FactoryType)
    {
        $this->any = $any;
        $this->FactoryType = $FactoryType;
    }
}