<?php

include_once('ImportDataBase.php');

class ExistsResult extends ImportDataBase
{

    /**
     * @var string $ExternId
     * @access public
     */
    public $ExternId = null;

    /**
     * @var boolean $Exists
     * @access public
     */
    public $Exists = null;

    /**
     * @param guid $ImporterIdentifier
     * @param guid $DatabaseIdentifier
     * @param boolean $Exists
     * @access public
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier, $Exists)
    {
      parent::__construct($ImporterIdentifier, $DatabaseIdentifier);
      $this->Exists = $Exists;
    }

}
