<?php

class GetCustomerPriceList
{

    /**
     * @var CustomerIdentifier $identifier
     * @access public
     */
    public $identifier = null;

    /**
     * @param CustomerIdentifier $identifier
     * @access public
     */
    public function __construct($identifier)
    {
      $this->identifier = $identifier;
    }

}
