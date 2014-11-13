<?php

class Promidata_Service_Response_Import
{

    /**
     *
     * @var Promidata_Service_DTO_ImportResult $ImportResult
     * @access public
     */
    public $ImportResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImportResult $ImportResult
     * @access public
     */
    public function __construct($ImportResult)
    {
        $this->ImportResult = $ImportResult;
    }

}
