<?php

class ImportResponse
{

    /**
     * @var ImportResult $ImportResult
     * @access public
     */
    public $ImportResult = null;

    /**
     * @param ImportResult $ImportResult
     * @access public
     */
    public function __construct($ImportResult)
    {
      $this->ImportResult = $ImportResult;
    }

}
