<?php

class SupplierSearchResult
{

    /**
     * @var int $CreditorNumber
     * @access public
     */
    public $CreditorNumber = null;

    /**
     * @var boolean $IsActive
     * @access public
     */
    public $IsActive = null;

    /**
     * @var guid $SupplierIdentifier
     * @access public
     */
    public $SupplierIdentifier = null;

    /**
     * @var string $SupplierName
     * @access public
     */
    public $SupplierName = null;

    /**
     * @param int $CreditorNumber
     * @param boolean $IsActive
     * @param guid $SupplierIdentifier
     * @access public
     */
    public function __construct($CreditorNumber, $IsActive, $SupplierIdentifier)
    {
      $this->CreditorNumber = $CreditorNumber;
      $this->IsActive = $IsActive;
      $this->SupplierIdentifier = $SupplierIdentifier;
    }

}
