<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_IndentInformationEventItem
{
    /**
     * @var string $AssigneeAssignType
     * @access public
     */
    public $AssigneeAssignType = null;

    /**
     * @var string $AssigneeUserNameFull
     * @access public
     */
    public $AssigneeUserNameFull = null;

    /**
     * @var dateTime $DateOfCompletition
     * @access public
     */
    public $DateOfCompletition = null;

    /**
     * @var int $EventDateDays
     * @access public
     */
    public $EventDateDays = null;

    /**
     * @var string $EventDateType
     * @access public
     */
    public $EventDateType = null;

    /**
     * @var int $IndentProbability
     * @access public
     */
    public $IndentProbability = null;

    /**
     * @var boolean $IsComplete
     * @access public
     */
    public $IsComplete = null;

    /**
     * @var boolean $IsCurrentEvent
     * @access public
     */
    public $IsCurrentEvent = null;

    /**
     * @var boolean $IsMailEvent
     * @access public
     */
    public $IsMailEvent = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $Notice
     * @access public
     */
    public $Notice = null;

    /**
     * @var dateTime $ShouldBeCompletedDate
     * @access public
     */
    public $ShouldBeCompletedDate = null;

    /**
     * @var int $SortNumber
     * @access public
     */
    public $SortNumber = null;

    /**
     * @param int $EventDateDays
     * @param boolean $IsComplete
     * @param boolean $IsCurrentEvent
     * @param boolean $IsMailEvent
     * @param int $SortNumber
     * @access public
     */
    public function __construct($EventDateDays, $IsComplete, $IsCurrentEvent, $IsMailEvent, $SortNumber)
    {
        $this->EventDateDays = $EventDateDays;
        $this->IsComplete = $IsComplete;
        $this->IsCurrentEvent = $IsCurrentEvent;
        $this->IsMailEvent = $IsMailEvent;
        $this->SortNumber = $SortNumber;
    }
}