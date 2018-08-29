<?php

class TenderInformationConvertItem
{

    /**
     * @var int $IndentNumber
     * @access public
     */
    public $IndentNumber = null;

    /**
     * @var string $IndentNumberPrefix
     * @access public
     */
    public $IndentNumberPrefix = null;

    /**
     * @var string $IndentNumberSuffix
     * @access public
     */
    public $IndentNumberSuffix = null;

    /**
     * @param int $IndentNumber
     * @access public
     */
    public function __construct($IndentNumber)
    {
      $this->IndentNumber = $IndentNumber;
    }

}
