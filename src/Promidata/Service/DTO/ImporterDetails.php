<?php

class Promidata_Service_DTO_ImporterDetails
{

    /**
     *
     * @var Promidata_Service_DTO_ImportFieldInfo[] $FieldInfos
     * @access public
     */
    public $FieldInfos = null;

    /**
     *
     * @var guid $ImporterId
     * @access public
     */
    public $ImporterId = null;

    /**
     *
     * @param guid $ImporterId
     * @access public
     */
    public function __construct($ImporterId)
    {
        $this->ImporterId = $ImporterId;
    }

}
