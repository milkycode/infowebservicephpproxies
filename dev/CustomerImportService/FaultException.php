<?php

include_once('CommunicationException.php');

class FaultException extends CommunicationException
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
