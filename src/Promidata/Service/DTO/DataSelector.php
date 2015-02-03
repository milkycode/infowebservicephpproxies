<?php

class Promidata_Service_DTO_DataSelector
{

    /**
     * @var string $SelectorType
     * @access public
     */
    public $SelectorType = null;

    /**
     * @var Promidata_Service_DTO_KeyValueOfstringanyType[] $SelectorValues
     * @access public
     */
    public $SelectorValues = null;

    /**
     * @access public
     */
    public function __construct($SelectorType)
    {
        $this->SelectorType = $SelectorType;
    }

    public function add($Key, $Value)
    {
        $this->SelectorValues[] = new Promidata_Service_DTO_KeyValueOfstringanyType($Key, $Value);
    }
}
