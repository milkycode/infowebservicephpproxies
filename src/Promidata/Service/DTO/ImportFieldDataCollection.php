<?php

class Promidata_Service_DTO_ImportFieldDataCollection
{

    /**
     *
     * @var Promidata_Service_DTO_ImportFieldData[] $ImportFieldDataItem
     * @access public
     */
    public $ImportFieldDataItem = null;

    public function Add($FieldIdentifier = null, $FieldData = null, $Options = null)
    {
        if (!empty($FieldData)) {
            $this->ImportFieldDataItem[] = new Promidata_Service_DTO_ImportFieldData($FieldIdentifier, $FieldData, $Options);
        }
    }

    /**
     *
     * @access public
     */
    public function __construct()
    {
        $this->ImportFieldDataItem = array();
    }

}
