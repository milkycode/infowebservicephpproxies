<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_SearchIndentParameter
{
    /**
     * @var string $SearchKey
     * @access public
     */
    public $SearchKey = null;

    /**
     * @var anyType $SearchValue
     * @access public
     */
    public $SearchValue = null;

    /**
     * @access public
     */
    public function __construct()
    {
    }
}