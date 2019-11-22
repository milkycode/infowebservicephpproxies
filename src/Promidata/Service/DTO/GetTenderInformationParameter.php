<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_GetTenderInformationParameter
{
    /**
     * @var string $TenderNumberFull
     * @access public
     */
    public $TenderNumberFull = null;

    /**
     * @var string $TenderNumberFull
     * @access public
     */
    public function __construct($TenderNumberFull = null)
    {
        $this->TenderNumberFull = $TenderNumberFull;
    }
}