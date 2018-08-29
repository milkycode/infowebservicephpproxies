<?php

class GetSupplierInformation
{

    /**
     * @var SupplierIdentifier $identifierV1
     * @access public
     */
    public $identifierV1 = null;

    /**
     * @param SupplierIdentifier $identifierV1
     * @access public
     */
    public function __construct($identifierV1)
    {
      $this->identifierV1 = $identifierV1;
    }

}
