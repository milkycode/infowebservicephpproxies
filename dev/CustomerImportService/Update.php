<?php

class Update
{

    /**
     * @var DataSelector $dataSelector
     * @access public
     */
    public $dataSelector = null;

    /**
     * @var ImportData $importData
     * @access public
     */
    public $importData = null;

    /**
     * @param DataSelector $dataSelector
     * @param ImportData $importData
     * @access public
     */
    public function __construct($dataSelector, $importData)
    {
      $this->dataSelector = $dataSelector;
      $this->importData = $importData;
    }

}
