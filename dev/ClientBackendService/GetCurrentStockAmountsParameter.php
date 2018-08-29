<?php

class GetCurrentStockAmountsParameter
{

    /**
     * @var int $Limit
     * @access public
     */
    public $Limit = null;

    /**
     * @var string $LocationName
     * @access public
     */
    public $LocationName = null;

    /**
     * @var int $Page
     * @access public
     */
    public $Page = null;

    /**
     * @param int $Limit
     * @param int $Page
     * @access public
     */
    public function __construct($Limit, $Page)
    {
      $this->Limit = $Limit;
      $this->Page = $Page;
    }

}
