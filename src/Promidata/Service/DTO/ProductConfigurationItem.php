<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ProductConfigurationItem
{
    /**
     * @var int $CombinationNumber
     * @access public
     */
    public $CombinationNumber = null;

    /**
     * @var string $CombinationType
     * @access public
     */
    public $CombinationType = null;

    /**
     * @var string $MainColorKey
     * @access public
     */
    public $MainColorKey = null;

    /**
     * @var string $MainSizeKey
     * @access public
     */
    public $MainSizeKey = null;

    /**
     * @var float $QuantityDenominator
     * @access public
     */
    public $QuantityDenominator = null;

    /**
     * @var string $QuantityDenominatorUnit
     * @access public
     */
    public $QuantityDenominatorUnit = null;

    /**
     * @var float $QuantityNumerator
     * @access public
     */
    public $QuantityNumerator = null;

    /**
     * @var string $QuantityNumeratorUnit
     * @access public
     */
    public $QuantityNumeratorUnit = null;

    /**
     * @var string $QuantityType
     * @access public
     */
    public $QuantityType = null;

    /**
     * @var boolean $RestrictedToColorSizeCombination
     * @access public
     */
    public $RestrictedToColorSizeCombination = null;

    /**
     * @var int $ResultRoundDigits
     * @access public
     */
    public $ResultRoundDigits = null;

    /**
     * @var int $SortNumber
     * @access public
     */
    public $SortNumber = null;

    /**
     * @var int $UseColorsFromArticleCombination
     * @access public
     */
    public $UseColorsFromArticleCombination = null;

    /**
     * @var int $UseSizesFromArticleCombination
     * @access public
     */
    public $UseSizesFromArticleCombination = null;

    /**
     * @param float $QuantityDenominator
     * @param float $QuantityNumerator
     * @param boolean $RestrictedToColorSizeCombination
     * @param int $ResultRoundDigits
     * @param int $SortNumber
     * @access public
     */
    public function __construct($QuantityDenominator, $QuantityNumerator, $RestrictedToColorSizeCombination, $ResultRoundDigits, $SortNumber)
    {
      $this->QuantityDenominator = $QuantityDenominator;
      $this->QuantityNumerator = $QuantityNumerator;
      $this->RestrictedToColorSizeCombination = $RestrictedToColorSizeCombination;
      $this->ResultRoundDigits = $ResultRoundDigits;
      $this->SortNumber = $SortNumber;
    }
}