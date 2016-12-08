<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ProductPriceInformation
{
    /**
     * @var string $ArticleNumber
     * @access public
     */
    public $ArticleNumber = null;

    /**
     * @var string $CustomerNumber
     * @access public
     */
    public $CustomerNumber = null;

    /**
     * @var float $CustomerSpecificSellingPrice
     * @access public
     */
    public $CustomerSpecificSellingPrice = null;

    /**
     * @var float $Discount
     * @access public
     */
    public $Discount = null;

    /**
     * @var int $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var boolean $QuantityDependentPrice
     * @access public
     */
    public $QuantityDependentPrice = null;

    /**
     * @var float $RegularPrice
     * @access public
     */
    public $RegularPrice = null;

    /**
     * @param float $CustomerSpecificSellingPrice
     * @param float $Discount
     * @param int $Quantity
     * @param boolean $QuantityDependentPrice
     * @param float $RegularPrice
     * @access public
     */
    public function __construct(
        $CustomerSpecificSellingPrice,
        $Discount,
        $Quantity,
        $QuantityDependentPrice,
        $RegularPrice
    ) {
        $this->CustomerSpecificSellingPrice = $CustomerSpecificSellingPrice;
        $this->Discount = $Discount;
        $this->Quantity = $Quantity;
        $this->QuantityDependentPrice = $QuantityDependentPrice;
        $this->RegularPrice = $RegularPrice;
    }
}