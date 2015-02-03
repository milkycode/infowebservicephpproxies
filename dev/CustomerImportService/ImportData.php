<?php

include_once('ImportDataBase.php');

class ImportData extends ImportDataBase
{

    /**
     * @var ImportFieldDataCollection $ImportFields
     * @access public
     */
    public $ImportFields = null;

    /**
     * @var AdditionalDataCollection $AdditionalData
     * @access public
     */
    public $AdditionalData = null;

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
