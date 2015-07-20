<?php

class ExceptionCustom
{

    /**
     * @var string $any
     * @access public
     */
    public $any = null;

    /**
     * @var QName $FactoryType
     * @access public
     */
    public $FactoryType = null;

    /**
     * @param string $any
     * @param QName $FactoryType
     * @access public
     */
    public function __construct($any, $FactoryType)
    {
      $this->any = $any;
      $this->FactoryType = $FactoryType;
    }

}
