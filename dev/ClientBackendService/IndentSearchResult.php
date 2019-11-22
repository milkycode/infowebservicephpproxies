<?php

class IndentSearchResult
{

    /**
     * @var string $CustomerName
     * @access public
     */
    public $CustomerName = null;

    /**
     * @var IndentStateEnum $IndentCalculatedState
     * @access public
     */
    public $IndentCalculatedState = null;

    /**
     * @var IndentStateEnum $IndentDelivarableState
     * @access public
     */
    public $IndentDelivarableState = null;

    /**
     * @var IndentStateEnum $IndentDeliverableState
     * @access public
     */
    public $IndentDeliverableState = null;

    /**
     * @var IndentStateEnum $IndentDeliveredState
     * @access public
     */
    public $IndentDeliveredState = null;

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
     * @var IndentStateEnum $IndentOrderedState
     * @access public
     */
    public $IndentOrderedState = null;

    /**
     * @var GeneralStateEnum $IndentPrintedState
     * @access public
     */
    public $IndentPrintedState = null;

    /**
     * @var boolean $IsClosed
     * @access public
     */
    public $IsClosed = null;

    /**
     * @param IndentStateEnum $IndentCalculatedState
     * @param IndentStateEnum $IndentDelivarableState
     * @param IndentStateEnum $IndentDeliverableState
     * @param IndentStateEnum $IndentDeliveredState
     * @param int $IndentNumber
     * @param IndentStateEnum $IndentOrderedState
     * @param GeneralStateEnum $IndentPrintedState
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
