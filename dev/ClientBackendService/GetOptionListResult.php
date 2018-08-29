<?php

class GetOptionListResult
{

    /**
     * @var OptionItem[] $OptionList
     * @access public
     */
    public $OptionList = null;

    /**
     * @var int $TotalOptionCount
     * @access public
     */
    public $TotalOptionCount = null;

    /**
     * @param int $TotalOptionCount
     * @access public
     */
    public function __construct($TotalOptionCount)
    {
      $this->TotalOptionCount = $TotalOptionCount;
    }

}
