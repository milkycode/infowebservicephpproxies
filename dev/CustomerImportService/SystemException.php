<?php

include_once('ExceptionCustom.php');

class SystemException extends ExceptionCustom
{

    /**
     * @param string $any
     * @param QName $FactoryType
     * @access public
     */
    public function __construct($any, $FactoryType)
    {
      parent::__construct($any, $FactoryType);
    }

}
