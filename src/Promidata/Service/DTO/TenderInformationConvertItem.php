<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_TenderInformationConvertItem
{
    /**
     * @var int $IndentNumber
     * @access public
     */
    public $IndentNumber = null;

    /**
     * @var string $IndentNumberPrefix
     * @access public
     */
    public $IndentNumberPrefix = null;

    /**
     * @var string $IndentNumberSuffix
     * @access public
     */
    public $IndentNumberSuffix = null;

    /**
     * @param int $IndentNumber
     * @access public
     */
    public function __construct($IndentNumber)
    {
        $this->IndentNumber = $IndentNumber;
    }
}