<?php

class Import
{

    /**
     * @var ImportData $importData
     * @access public
     */
    public $importData = null;

    /**
     * @param ImportData $importData
     * @access public
     */
    public function __construct($importData)
    {
      $this->importData = $importData;
    }

}
