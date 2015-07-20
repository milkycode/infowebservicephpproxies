<?php

class ImporterDefinition
{

    /**
     * @var guid $ImporterId
     * @access public
     */
    public $ImporterId = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @param guid $ImporterId
     * @access public
     */
    public function __construct($ImporterId)
    {
      $this->ImporterId = $ImporterId;
    }

}
