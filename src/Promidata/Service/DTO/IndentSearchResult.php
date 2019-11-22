<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_IndentSearchResult
{
    /**
     * @var string $CustomerName
     * @access public
     */
    public $CustomerName = null;

    /**
     * @var Promidata_Service_Enum_IndentState $IndentCalculatedState
     * @access public
     */
    public $IndentCalculatedState = null;

    /**
     * @var Promidata_Service_Enum_IndentState $IndentDelivarableState
     * @access public
     */
    public $IndentDelivarableState = null;

    /**
     * @var Promidata_Service_Enum_IndentState $IndentDeliveredState
     * @access public
     */
    public $IndentDeliveredState = null;

    /**
     * @var Promidata_Service_Enum_IndentState $IndentDeliverableState
     * @access public
     */
    public $IndentDeliverableState = null;

    /**
     * @var int $IndentNumber
     * @access public
     */
    public $IndentNumber = null;

    /**
     * @var string $IndentNumberPrefix
     * @access public
     */
    public $IndentNumberPrefix = null;

    /**
     * @var string $IndentNumberSuffix
     * @access public
     */
    public $IndentNumberSuffix = null;

    /**
     * @var Promidata_Service_Enum_IndentState $IndentOrderedState
     * @access public
     */
    public $IndentOrderedState = null;

    /**
     * @var Promidata_Service_Enum_GeneralState $IndentPrintedState
     * @access public
     */
    public $IndentPrintedState = null;

    /**
     * @var boolean $IsClosed
     * @access public
     */
    public $IsClosed = null;

    /**
     * @param Promidata_Service_Enum_IndentState $IndentCalculatedState
     * @param Promidata_Service_Enum_IndentState $IndentDelivarableState
     * @param Promidata_Service_Enum_IndentState $IndentDeliverableState
     * @param Promidata_Service_Enum_IndentState $IndentDeliveredState
     * @param int $IndentNumber
     * @param Promidata_Service_Enum_IndentState $IndentOrderedState
     * @param Promidata_Service_Enum_GeneralState $IndentPrintedState
     * @param boolean $IsClosed
     * @access public
     */
    public function __construct($IndentCalculatedState, $IndentDelivarableState, $IndentDeliverableState, $IndentDeliveredState, $IndentNumber, $IndentOrderedState, $IndentPrintedState, $IsClosed)
    {
        $this->IndentCalculatedState = $IndentCalculatedState;
        $this->IndentDelivarableState = $IndentDelivarableState;
        $this->IndentDeliverableState = $IndentDeliverableState;
        $this->IndentDeliveredState = $IndentDeliveredState;
        $this->IndentNumber = $IndentNumber;
        $this->IndentOrderedState = $IndentOrderedState;
        $this->IndentPrintedState = $IndentPrintedState;
        $this->IsClosed = $IsClosed;
    }
}