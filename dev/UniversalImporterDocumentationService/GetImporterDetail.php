<?php

class GetImporterDetail
{

    /**
     * @var guid $importerId
     * @access public
     */
    public $importerId = null;

    /**
     * @param guid $importerId
     * @access public
     */
    public function __construct($importerId)
    {
      $this->importerId = $importerId;
    }

}
