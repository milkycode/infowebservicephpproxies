<?php

class Promidata_Service_DTO_AdditionalDataCollection
{

    /**
     *
     * @var Promidata_Service_DTO_AdditionalData[] $AdditionalDataItem
     * @access public
     */
    public $AdditionalDataItem = null;

    public function Add($AdditionalDataKey = null, $Value = null)
    {
        $this->AdditionalDataItem[] = new Promidata_Service_DTO_AdditionalData($AdditionalDataKey, $Value);
    }

    /**
     *
     * @access public
     */
    public function __construct()
    {
        $this->AdditionalDataItem = array();
    }

}
