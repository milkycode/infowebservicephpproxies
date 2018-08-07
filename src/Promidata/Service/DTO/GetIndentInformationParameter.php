<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
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