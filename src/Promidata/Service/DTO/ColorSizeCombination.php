<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ColorSizeCombination
{
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
     * @param float $CurrentStockPrice
     * @access public
     */
    public function __construct($CurrentStockPrice)
    {
        $this->CurrentStockPrice = $CurrentStockPrice;
    }
}