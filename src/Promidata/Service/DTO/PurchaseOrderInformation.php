<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_PurchaseOrderInformation
{
    /**
     * @var string $AdditionalCostCurrency
     * @access public
     */
    public $AdditionalCostCurrency = null;

    /**
     * @var string $AdditionalCostText
     * @access public
     */
    public $AdditionalCostText = null;

    /**
     * @var string $BelongsToOrdersString
     * @access public
     */
    public $BelongsToOrdersString = null;

    /**
     * @var float $BuyingPriceTotal
     * @access public
     */
    public $BuyingPriceTotal = null;

    /**
     * @var dateTime $ClosingDate
     * @access public
     */
    public $ClosingDate = null;

    /**
     * @var float $CurrencyFactor
     * @access public
     */
    public $CurrencyFactor = null;

    /**
     * @var string $CurrencyName
     * @access public
     */
    public $CurrencyName = null;

    /**
     * @var Promidata_Service_DTO_LocalizedItem $DeliveryTerm
     * @access public
     */
    public $DeliveryTerm = null;

    /**
     * @var Promidata_Service_DTO_ComplexAddress $DispatchAddress
     * @access public
     */
    public $DispatchAddress = null;

    /**
     * @var Promidata_Service_DTO_LocalizedItem $DispatchType
     * @access public
     */
    public $DispatchType = null;

    /**
     * @var string $FooterText
     * @access public
     */
    public $FooterText = null;

    /**
     * @var string $HeaderText
     * @access public
     */
    public $HeaderText = null;

    /**
     * @var Promidata_Service_DTO_PurchaseOrderIdentifier $IdentifierV1
     * @access public
     */
    public $IdentifierV1 = null;

    /**
     * @var dateTime $IncomingDate
     * @access public
     */
    public $IncomingDate = null;

    /**
     * @var string $InternOrderNotice
     * @access public
     */
    public $InternOrderNotice = null;

    /**
     * @var boolean $IsCanceled
     * @access public
     */
    public $IsCanceled = null;

    /**
     * @var boolean $IsComplete
     * @access public
     */
    public $IsComplete = null;

    /**
     * @var boolean $IsDirectDispatch
     * @access public
     */
    public $IsDirectDispatch = null;

    /**
     * @var boolean $IsStockOrder
     * @access public
     */
    public $IsStockOrder = null;

    /**
     * @var string $Notice
     * @access public
     */
    public $Notice = null;

    /**
     * @var dateTime $OrderDate
     * @access public
     */
    public $OrderDate = null;

    /**
     * @var string $OwnOrderNumber
     * @access public
     */
    public $OwnOrderNumber = null;

    /**
     * @var Promidata_Service_DTO_PaymentInformation[] $PaymentModes
     * @access public
     */
    public $PaymentModes = null;

    /**
     * @var Promidata_Service_DTO_ComplexAddress $PostAddress
     * @access public
     */
    public $PostAddress = null;

    /**
     * @var Promidata_Service_DTO_PurchaseOrderPositionItem[] $PurchaseOrderPositions
     * @access public
     */
    public $PurchaseOrderPositions = null;

    /**
     * @var string $SalesOrderNumbers
     * @access public
     */
    public $SalesOrderNumbers = null;

    /**
     * @var dateTime $SendingOutDate
     * @access public
     */
    public $SendingOutDate = null;

    /**
     * @var int $SupplierCreditorNumber
     * @access public
     */
    public $SupplierCreditorNumber = null;

    /**
     * @var dateTime $SupplierDate
     * @access public
     */
    public $SupplierDate = null;

    /**
     * @var string $SupplierInvoiceNumber
     * @access public
     */
    public $SupplierInvoiceNumber = null;

    /**
     * @var string $SupplierName
     * @access public
     */
    public $SupplierName = null;

    /**
     * @var dateTime $WishDeliveryDate
     * @access public
     */
    public $WishDeliveryDate = null;

    /**
     * @param float $BuyingPriceTotal
     * @param float $CurrencyFactor
     * @param boolean $IsCanceled
     * @param boolean $IsComplete
     * @param boolean $IsDirectDispatch
     * @param boolean $IsStockOrder
     * @param dateTime $OrderDate
     * @param int $SupplierCreditorNumber
     * @param dateTime $WishDeliveryDate
     * @access public
     */
    public function __construct(
        $BuyingPriceTotal,
        $CurrencyFactor,
        $IsCanceled,
        $IsComplete,
        $IsDirectDispatch,
        $IsStockOrder,
        $OrderDate,
        $SupplierCreditorNumber,
        $WishDeliveryDate
    ) {
        $this->BuyingPriceTotal = $BuyingPriceTotal;
        $this->CurrencyFactor = $CurrencyFactor;
        $this->IsCanceled = $IsCanceled;
        $this->IsComplete = $IsComplete;
        $this->IsDirectDispatch = $IsDirectDispatch;
        $this->IsStockOrder = $IsStockOrder;
        $this->OrderDate = $OrderDate;
        $this->SupplierCreditorNumber = $SupplierCreditorNumber;
        $this->WishDeliveryDate = $WishDeliveryDate;
    }
}