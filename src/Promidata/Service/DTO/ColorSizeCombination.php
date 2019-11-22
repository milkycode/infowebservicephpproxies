<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_ColorSizeCombination
{
    /**
     * @var Promidata_Service_DTO_ArticleDynamicDataItem[] $ArticleDynamicDatas
     * @access public
     */
    public $ArticleDynamicDatas = null;

    /**
     * @var Promidata_Service_DTO_ArticleDynamicLanguageDataItem[] $ArticleDynamicLanguageDatas
     * @access public
     */
    public $ArticleDynamicLanguageDatas = null;

    /**
     * @var Promidata_Service_DTO_ProductPriceInformation[] $BuyingRelays
     * @access public
     */
    public $BuyingRelays = null;

    /**
     * @var Promidata_Service_DTO_TranslationItem[] $ColorNames
     * @access public
     */
    public $ColorNames = null;

    /**
     * @var float $CurrentStockPrice
     * @access public
     */
    public $CurrentStockPrice = null;

    /**
     * @var float $DefaultPurchasingCosts
     * @access public
     */
    public $DefaultPurchasingCosts = null;

    /**
     * @var string $EanCode
     * @access public
     */
    public $EanCode = null;

    /**
     * @var string $FreeText1
     * @access public
     */
    public $FreeText1 = null;

    /**
     * @var string $FreeText2
     * @access public
     */
    public $FreeText2 = null;

    /**
     * @var string $FreeText3
     * @access public
     */
    public $FreeText3 = null;

    /**
     * @var Promidata_Service_DTO_ImportInformation[] $ImportInformations
     * @access public
     */
    public $ImportInformations = null;

    /**
     * @var boolean $IsActive
     * @access public
     */
    public $IsActive = null;

    /**
     * @var Promidata_Service_DTO_LinkItemV1[] $LinkList
     * @access public
     */
    public $LinkList = null;

    /**
     * @var string $Notice
     * @access public
     */
    public $Notice = null;

    /**
     * @var string $Option1Key
     * @access public
     */
    public $Option1Key = null;

    /**
     * @var Promidata_Service_DTO_TranslationItem[] $Option1Names
     * @access public
     */
    public $Option1Names = null;

    /**
     * @var string $Option2Key
     * @access public
     */
    public $Option2Key = null;

    /**
     * @var Promidata_Service_DTO_TranslationItem[] $Option2Names
     * @access public
     */
    public $Option2Names = null;

    /**
     * @var string $OrderNumberAddition
     * @access public
     */
    public $OrderNumberAddition = null;

    /**
     * @var string $OwnArticleNumberAddition
     * @access public
     */
    public $OwnArticleNumberAddition = null;

    /**
     * @var Promidata_Service_DTO_ProductPriceInformation[] $SellingRelays
     * @access public
     */
    public $SellingRelays = null;

    /**
     * @var Promidata_Service_DTO_TranslationItem[] $SizeNames
     * @access public
     */
    public $SizeNames = null;

    /**
     * @var boolean $UseOnlyOrderNumberAddition
     * @access public
     */
    public $UseOnlyOrderNumberAddition = null;

    /**
     * @var boolean $UseOnlyOwnArticleNumberAddition
     * @access public
     */
    public $UseOnlyOwnArticleNumberAddition = null;

    /**
     * @var guid $VariationIdentifier
     * @access public
     */
    public $VariationIdentifier = null;

    /**
     * @param float $CurrentStockPrice
     * @param boolean $IsActive
     * @param boolean $UseOnlyOrderNumberAddition
     * @param boolean $UseOnlyOwnArticleNumberAddition
     * @param guid $VariationIdentifier
     * @access public
     */
    public function __construct($CurrentStockPrice, $IsActive, $UseOnlyOrderNumberAddition, $UseOnlyOwnArticleNumberAddition, $VariationIdentifier)
    {
        $this->CurrentStockPrice = $CurrentStockPrice;
        $this->IsActive = $IsActive;
        $this->UseOnlyOrderNumberAddition = $UseOnlyOrderNumberAddition;
        $this->UseOnlyOwnArticleNumberAddition = $UseOnlyOwnArticleNumberAddition;
        $this->VariationIdentifier = $VariationIdentifier;
    }
}