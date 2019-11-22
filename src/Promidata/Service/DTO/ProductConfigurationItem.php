<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_ProductConfigurationItem
{
    /**
     * @var boolean $AddAsInlineCost
     * @access public
     */
    public $AddAsInlineCost = null;

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
     * @var ProductConfigurationColorItem[] $LinkedColorRestrictions
     * @access public
     */
    public $LinkedColorRestrictions = null;

    /**
     * @var Promidata_Service_DTO_ProductConfigurationOptionItem[] $LinkedOption1Restrictions
     * @access public
     */
    public $LinkedOption1Restrictions = null;

    /**
     * @var Promidata_Service_DTO_ProductConfigurationOptionItem[] $LinkedOption2Restrictions
     * @access public
     */
    public $LinkedOption2Restrictions = null;

    /**
     * @var string $LinkedOwnArticleNumber
     * @access public
     */
    public $LinkedOwnArticleNumber = null;

    /**
     * @var guid $LinkedProductIdentifier
     * @access public
     */
    public $LinkedProductIdentifier = null;

    /**
     * @var string $LinkedPurchaseOrderNumber
     * @access public
     */
    public $LinkedPurchaseOrderNumber = null;

    /**
     * @var ProductConfigurationSizeItem[] $LinkedSizeRestrictions
     * @access public
     */
    public $LinkedSizeRestrictions = null;

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
     * @var boolean $RestrictedToVariation
     * @access public
     */
    public $RestrictedToVariation = null;

    /**
     * @var int $ResultRoundDigits
     * @access public
     */
    public $ResultRoundDigits = null;

    /**
     * @var boolean $SetPrintPositionOnlyPriceToOnInsert
     * @access public
     */
    public $SetPrintPositionOnlyPriceToOnInsert = null;

    /**
     * @var boolean $SetPrintPositionToOnInsert
     * @access public
     */
    public $SetPrintPositionToOnInsert = null;

    /**
     * @var boolean $SetPrintPriceSummaryToOnInsert
     * @access public
     */
    public $SetPrintPriceSummaryToOnInsert = null;

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
     * @var int $UseOption1FromArticleCombination
     * @access public
     */
    public $UseOption1FromArticleCombination = null;

    /**
     * @var int $UseOption2FromArticleCombination
     * @access public
     */
    public $UseOption2FromArticleCombination = null;

    /**
     * @var int $UseSizesFromArticleCombination
     * @access public
     */
    public $UseSizesFromArticleCombination = null;

    /**
     * @param boolean $AddAsInlineCost
     * @param guid $LinkedProductIdentifier
     * @param float $QuantityDenominator
     * @param float $QuantityNumerator
     * @param boolean $RestrictedToColorSizeCombination
     * @param boolean $RestrictedToVariation
     * @param int $ResultRoundDigits
     * @param int $SortNumber
     * @access public
     */
    public function __construct($AddAsInlineCost, $LinkedProductIdentifier, $QuantityDenominator, $QuantityNumerator, $RestrictedToColorSizeCombination, $RestrictedToVariation, $ResultRoundDigits, $SortNumber)
    {
        $this->AddAsInlineCost = $AddAsInlineCost;
        $this->LinkedProductIdentifier = $LinkedProductIdentifier;
        $this->QuantityDenominator = $QuantityDenominator;
        $this->QuantityNumerator = $QuantityNumerator;
        $this->RestrictedToColorSizeCombination = $RestrictedToColorSizeCombination;
        $this->RestrictedToVariation = $RestrictedToVariation;
        $this->ResultRoundDigits = $ResultRoundDigits;
        $this->SortNumber = $SortNumber;
    }
}