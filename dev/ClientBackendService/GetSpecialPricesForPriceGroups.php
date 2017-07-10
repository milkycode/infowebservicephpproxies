<?php

class GetSpecialPricesForPriceGroups
{

    /**
     * @var string $priceGroup
     * @access public
     */
    public $priceGroup = null;

    /**
     * @param string $priceGroup
     * @access public
     */
    public function __construct($priceGroup)
    {
      $this->priceGroup = $priceGroup;
    }

}
