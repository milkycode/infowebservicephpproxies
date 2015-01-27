<?php

class Promidata_Service_Exception_Communication extends Promidata_Service_Exception_System
{

    /**
     *
     * @access public
     */
    public function __construct($any = null, $FactoryType = null)
    {
        parent::__construct($any, $FactoryType);
    }

}
