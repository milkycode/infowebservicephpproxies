<?php

class Promidata_Service_DTO_AdditionalData
{

    /**
     *
     * @var string $AdditionalDataKey
     * @access public
     */
    public $AdditionalDataKey = null;

    /**
     *
     * @var string $Value
     * @access public
     */
    public $Value = null;

    /**
     *
     * @access public
     */
    public function __construct($AdditionalDataKey = null, $Value = null)
    {
        $this->AdditionalDataKey = $AdditionalDataKey;
        $this->Value = $Value;
    }

}
