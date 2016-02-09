<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_TenderIndentImporterRelayData
{
    /**
     * @var boolean $IsCompletePrice
     * @access public
     */
    public $IsCompletePrice = null;

    /**
     * @var int $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var float $SellingPricePerUnit
     * @access public
     */
    public $SellingPricePerUnit = null;

    /**
     * @param boolean $IsCompletePrice
     * @param int $Quantity
     * @param float $SellingPricePerUnit
     * @access public
     */
    public function __construct($IsCompletePrice, $Quantity, $SellingPricePerUnit)
    {
        $this->IsCompletePrice = $IsCompletePrice;
        $this->Quantity = $Quantity;
        $this->SellingPricePerUnit = $SellingPricePerUnit;
    }
}