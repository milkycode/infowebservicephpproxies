<?php

class GetOptionListParameter
{

    /**
     * @var int $Limit
     * @access public
     */
    public $Limit = null;

    /**
     * @var string $OptionTypeKey
     * @access public
     */
    public $OptionTypeKey = null;

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
