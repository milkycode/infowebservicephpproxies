<?php
/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_AutomaticCondition
{
    /**
     * @var string $AutomaticDeliveryConditionDescription
     * @access public
     */
    public $AutomaticDeliveryConditionDescription = null;

    /**
     * @var guid $AutomaticDeliveryConditionId
     * @access public
     */
    public $AutomaticDeliveryConditionId = null;

    /**
     * @var string $DeliveryTermShow
     * @access public
     */
    public $DeliveryTermShow = null;

    /**
     * @var string $DispatchTypeDescription
     * @access public
     */
    public $DispatchTypeDescription = null;

    /**
     * @var string $DispatchTypeShow
     * @access public
     */
    public $DispatchTypeShow = null;

    /**
     * @var string $ExpenseName
     * @access public
     */
    public $ExpenseName = null;

    /**
     * @var string $ExpenseNumber
     * @access public
     */
    public $ExpenseNumber = null;

    /**
     * @var float $ExpensePrice
     * @access public
     */
    public $ExpensePrice = null;

    /**
     * @var float $SpecialPriceForPositions
     * @access public
     */
    public $SpecialPriceForPositions = null;

    /**
     * @param guid $AutomaticDeliveryConditionId
     * @access public
     */
    public function __construct($AutomaticDeliveryConditionId = null)
    {
        $this->AutomaticDeliveryConditionId = $AutomaticDeliveryConditionId;
    }

}