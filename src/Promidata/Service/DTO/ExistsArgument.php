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
     * @param guid $DatabaseIdentifier
     * @access public
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier)
    {
        parent::__construct($ImporterIdentifier, $DatabaseIdentifier);
    }

}
