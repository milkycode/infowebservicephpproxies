<?php

class ImporterDetails
{

    /**
     * @var ImportFieldInfo[] $FieldInfos
     * @access public
     */
    public $FieldInfos = null;

    /**
     * @var guid $ImporterId
     * @access public
     */
    public $ImporterId = null;

    /**
     * @param guid $ImporterId
     * @access public
     */
    public function __construct($ImporterId)
    {
      $this->ImporterId = $ImporterId;
    }

}
