<?php

class Promidata_Service_Exception_System extends Promidata_Service_Exception_Custom
{

    /**
     *
     * @param string $any
     * @param QName $FactoryType
     * @access public
     */
    public function __construct($any, $FactoryType)
    {
        parent::__construct($any, $FactoryType);
    }

}
