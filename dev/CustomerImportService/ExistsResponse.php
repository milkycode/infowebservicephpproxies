<?php

class ExistsResponse
{

    /**
     * @var ExistsResult $ExistsResult
     * @access public
     */
    public $ExistsResult = null;

    /**
     * @param ExistsResult $ExistsResult
     * @access public
     */
    public function __construct($ExistsResult)
    {
      $this->ExistsResult = $ExistsResult;
    }

}
