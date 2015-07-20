<?php

class GetPossibleAutomaticConditionListResult
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
     * @var AutomaticCondition[] $PossibleAutomaticConditionList
     * @access public
     */
    public $PossibleAutomaticConditionList = null;

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
    public function __construct($CalculatedNumberOfPackages, $CalculatedTotalVolume, $CalculatedTotalWeight, $SaleTaxIsCalculated)
    {
      $this->CalculatedNumberOfPackages = $CalculatedNumberOfPackages;
      $this->CalculatedTotalVolume = $CalculatedTotalVolume;
      $this->CalculatedTotalWeight = $CalculatedTotalWeight;
      $this->SaleTaxIsCalculated = $SaleTaxIsCalculated;
    }

}
