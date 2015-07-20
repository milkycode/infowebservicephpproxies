<?php

class Promidata_Service_DTO_ExistsArgument extends Promidata_Service_DTO_ImportDataBase
{

    /**
     * @var Promidata_Service_DTO_DataSelector $Selector
     * @access public
     */
    public $Selector = null;

    /**
     * @param guid $ImporterIdentifier
     * @param $Selector Promidata_Service_DTO_DataSelector
     */
    public function __construct($ImporterIdentifier, $Selector)
    {
        parent::__construct($ImporterIdentifier);
        $this->Selector = $Selector;
    }

}
