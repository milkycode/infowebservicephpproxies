<?php

class ImportDataBase
{

    /**
     * @var guid $ImporterIdentifier
     * @access public
     */
    public $ImporterIdentifier = null;

    /**
     * @var guid $DatabaseIdentifier
     * @access public
     */
    public $DatabaseIdentifier = null;

    /**
     * @param guid $ImporterIdentifier
     * @param guid $DatabaseIdentifier
     * @access public
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier)
    {
      $this->ImporterIdentifier = $ImporterIdentifier;
      $this->DatabaseIdentifier = $DatabaseIdentifier;
    }

}
