<?php

class Promidata_Service_DTO_ExistsArgument extends Promidata_Service_DTO_ImportDataBase
{

    /**
     *
     * @var string $ExternalId
     * @access public
     */
    public $ExternalId = null;

    /**
     *
     * @var string $ImportSource
     * @access public
     */
    public $ImportSource = null;

    /**
     *
     * @param guid $ImporterIdentifier
     * @access public
     */
    public function __construct($ImporterIdentifier, $ImportSource = null, $ExternalId = null)
    {
        parent::__construct($ImporterIdentifier);

        $this->ImportSource = $ImportSource;
        $this->ExternalId = $ExternalId;
    }

}
