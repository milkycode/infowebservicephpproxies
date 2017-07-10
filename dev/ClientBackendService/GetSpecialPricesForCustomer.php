<?php

class GetSpecialPricesForCustomer
{

    /**
     * @var CustomerIdentifier $identifierV1
     * @access public
     */
    public $identifierV1 = null;

    /**
     * @param CustomerIdentifier $identifierV1
     * @access public
     */
    public function __construct($identifierV1)
    {
      $this->identifierV1 = $identifierV1;
    }

}
