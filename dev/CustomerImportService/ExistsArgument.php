<?php

include_once('ImportDataBase.php');

class ExistsArgument extends ImportDataBase
{

    /**
     * @var DataSelector $Selector
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
