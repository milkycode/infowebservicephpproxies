<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_GetPossibleAutomaticConditionListResult
{
    /**
     * @var int $CalculatedNumberOfPackages
     * @access public
     */
    public $CalculatedNumberOfPackages = null;

    /**
     * @var int $CalculatedTotalVolume
     * @access public
     */
    public $CalculatedTotalVolume = null;

    /**
     * @var int $CalculatedTotalWeight
     * @access public
     */
    public $CalculatedTotalWeight = null;

    /**
     * @var Promidata_Service_DTO_AutomaticCondition[] $AutomaticConditionList
     * @access public
     */
    public $AutomaticConditionList = null;

    /**
     * @var boolean $SaleTaxIsCalculated
     * @access public
     */
    public $SaleTaxIsCalculated = null;

    /**
     * @param int $CalculatedNumberOfPackages
     * @param int $CalculatedTotalVolume
     * @param int $CalculatedTotalWeight
     * @param boolean $SaleTaxIsCalculated
     * @access public
     */
    public function __construct(
        $CalculatedNumberOfPackages,
        $CalculatedTotalVolume,
        $CalculatedTotalWeight,
        $SaleTaxIsCalculated
    )
    {
        $this->CalculatedNumberOfPackages = $CalculatedNumberOfPackages;
        $this->CalculatedTotalVolume = $CalculatedTotalVolume;
        $this->CalculatedTotalWeight = $CalculatedTotalWeight;
        $this->SaleTaxIsCalculated = $SaleTaxIsCalculated;
    }
}