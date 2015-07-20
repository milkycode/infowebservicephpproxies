<?php

class CustomerSearchResult
{

    /**
     * @var guid $CustomerIdentifier
     * @access public
     */
    public $CustomerIdentifier = null;

    /**
     * @var string $CustomerName
     * @access public
     */
    public $CustomerName = null;

    /**
     * @var int $CustomerNumber
     * @access public
     */
    public $CustomerNumber = null;

    /**
     * @var int $DebitorNumber
     * @access public
     */
    public $DebitorNumber = null;

    /**
     * @var boolean $IsActive
     * @access public
     */
    public $IsActive = null;

    /**
     * @param guid $CustomerIdentifier
     * @param int $CustomerNumber
     * @param int $DebitorNumber
     * @param boolean $IsActive
     * @access public
     */
    public function __construct($CustomerIdentifier, $CustomerNumber, $DebitorNumber, $IsActive)
    {
      $this->CustomerIdentifier = $CustomerIdentifier;
      $this->CustomerNumber = $CustomerNumber;
      $this->DebitorNumber = $DebitorNumber;
      $this->IsActive = $IsActive;
    }

}
