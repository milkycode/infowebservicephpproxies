<?php

class Promidata_Service_Request_Update
{

    /**
     *
     * @var Promidata_Service_DTO_ImportData $importData
     * @access public
     */
    public $importData = null;

    /**
     *
     * @param Promidata_Service_DTO_ImportData $importData
     * @access public
     */
    public function __construct($importData)
    {
        $this->importData = $importData;
    }

}
