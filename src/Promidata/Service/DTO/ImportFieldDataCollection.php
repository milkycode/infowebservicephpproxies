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

    public function Remove($FieldIdentifier = null)
    {
        if (!empty($FieldIdentifier)) {
            $removeKey = null;
            foreach($this->ImportFieldDataItem as $key => $ImportFieldDataItem) {
                if ($ImportFieldDataItem->FieldIdentifier == $FieldIdentifier) {
                    $removeKey = $key;
                }
            }

            if (!is_null($removeKey)) {
                unset($this->ImportFieldDataItem[$removeKey]);
                // Reorder keys
                $this->ImportFieldDataItem = array_values($this->ImportFieldDataItem);
            }
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
