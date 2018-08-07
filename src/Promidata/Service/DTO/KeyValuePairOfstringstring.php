<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_KeyValuePairOfstringstring
{
    /**
     * @var string $key
     * @access public
     */
    public $key = null;

    /**
     * @var string $value
     * @access public
     */
    public $value = null;

    /**
     * @param string $key
     * @param string $value
     * @access public
     */
    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }
}