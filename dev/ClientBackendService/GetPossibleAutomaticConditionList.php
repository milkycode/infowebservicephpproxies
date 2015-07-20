<?php

class GetPossibleAutomaticConditionList
{

    /**
     * @var TenderIndentImporterData $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @var string[] $possibleDispatchTypes
     * @access public
     */
    public $possibleDispatchTypes = null;

    /**
     * @param TenderIndentImporterData $importdata
     * @param string[] $possibleDispatchTypes
     * @access public
     */
    public function __construct($importdata, $possibleDispatchTypes)
    {
      $this->importdata = $importdata;
      $this->possibleDispatchTypes = $possibleDispatchTypes;
    }

}
