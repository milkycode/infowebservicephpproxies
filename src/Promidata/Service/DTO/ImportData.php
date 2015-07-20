<?php

class Promidata_Service_DTO_ImportData extends Promidata_Service_DTO_ImportDataBase
{

    /**
     *
     * @var Promidata_Service_DTO_ImportFieldDataCollection $ImportFields
     * @access public
     */
    public $ImportFields = null;

    /**
     *
     * @var Promidata_Service_DTO_AdditionalDataCollection $AdditionalData
     * @access public
     */
    public $AdditionalData = null;

    /**
     *
     * @param guid $ImporterIdentifier
     * @access public
     */
    public function __construct($ImporterIdentifier)
    {
        parent::__construct($ImporterIdentifier);
    }

}
