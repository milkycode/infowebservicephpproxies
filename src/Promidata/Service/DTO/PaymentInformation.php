<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_PaymentInformation
{
    /**
     * @var int $Days
     * @access public
     */
    public $Days = null;

    /**
     * @var float $Deposit
     * @access public
     */
    public $Deposit = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $Show
     * @access public
     */
    public $Show = null;

    /**
     * @var int $Skonto
     * @access public
     */
    public $Skonto = null;

    /**
     * @var Promidata_Service_DTO_LocalizationItem[] $Texts
     * @access public
     */
    public $Texts = null;

    /**
     * @param int $Days
     * @param float $Deposit
     * @param int $Skonto
     * @access public
     */
    public function __construct($Days, $Deposit, $Skonto)
    {
        $this->Days = $Days;
        $this->Deposit = $Deposit;
        $this->Skonto = $Skonto;
    }
}