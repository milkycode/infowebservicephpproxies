<?php

class Promidata_Service_DTO_CompositeImportFieldInfo extends Promidata_Service_DTO_ImportFieldInfo
{

    /**
     *
     * @var Promidata_Service_DTO_ImportFieldInfo[] $CompositeFields
     * @access public
     */
    public $CompositeFields = null;

    /**
     *
     * @param boolean $IsRequired
     * @access public
     */
    public function __construct($IsRequired)
    {
        parent::__construct($IsRequired);
    }

}
