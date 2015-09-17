<?php

include_once('SystemException.php');

class CommunicationException extends SystemException
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
