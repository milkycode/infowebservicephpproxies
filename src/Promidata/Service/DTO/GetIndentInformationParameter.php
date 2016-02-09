<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_GetIndentInformationParameter
{
    /**
     * @var string $IndentNumberFull
     * @access public
     */
    public $IndentNumberFull = null;

    /**
     * @access public
     * @param string $IndentNumberFull
     */
    public function __construct($IndentNumberFull = null)
    {
        $this->IndentNumberFull = $IndentNumberFull;
    }
}