<?php

class Promidata_Service_Response_Logon
{

    /**
     *
     * @var string $LogonResult
     * @access public
     */
    public $LogonResult = null;

    /**
     *
     * @param string $LogonResult
     * @access public
     */
    public function __construct($LogonResult)
    {
        $this->LogonResult = $LogonResult;
    }

}
