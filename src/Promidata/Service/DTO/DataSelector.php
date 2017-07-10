<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_DataSelector
{
    /**
     * @var string $SelectorType
     * @access public
     */
    public $SelectorType = null;

    /**
     * @var Promidata_Service_DTO_KeyValueOfstringanyType[] $SelectorValues
     * @access public
     */
    public $SelectorValues = null;

    /**
     * @param string $SelectorType
     * @access public
     */
    public function __construct($SelectorType)
    {
        $this->SelectorType = $SelectorType;
    }

    public function add($Key, $Value)
    {
        $this->SelectorValues[] = new Promidata_Service_DTO_KeyValueOfstringanyType($Key, $Value);
    }
}