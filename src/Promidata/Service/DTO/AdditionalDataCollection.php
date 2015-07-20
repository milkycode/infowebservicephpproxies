<?php

class Promidata_Service_DTO_AdditionalDataCollection
{

    /**
     *
     * @var Promidata_Service_DTO_AdditionalData[] $AdditionalDataItem
     * @access public
     */
    public $AdditionalDataItem = null;

    public function Add($AdditionalDataKey = null, $Value = null, $Length = null)
    {
        if (!is_null($Value)) {
            if ($Length > 0) {
                $Value = substr($Value, 0, (int)$Length);
            }

            $this->AdditionalDataItem[] = new Promidata_Service_DTO_AdditionalData($AdditionalDataKey, $Value);
        }
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
