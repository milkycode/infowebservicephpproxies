<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_KeyValueOfstringanyType
{
    /**
     * @var string $Key
     * @access public
     */
    public $Key = null;

    /**
     * @var anyType $Value
     * @access public
     */
    public $Value = null;

    /**
     * @param string $Key
     * @param anyType $Value
     * @access public
     */
    public function __construct($Key, $Value)
    {
        $this->Key = $Key;
        $this->Value = new SoapVar($Value, XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'Value');
    }
}