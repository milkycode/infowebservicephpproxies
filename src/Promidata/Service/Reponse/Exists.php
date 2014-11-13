<?php

class Promidata_Service_Reponse_Exists
{

    /**
     *
     * @var Promidata_Service_DTO_ExistsResult $ExistsResult
     * @access public
     */
    public $ExistsResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ExistsResult $ExistsResult
     * @access public
     */
    public function __construct($ExistsResult)
    {
        $this->ExistsResult = $ExistsResult;
    }

}
