<?php

class UpdateResponse
{

    /**
     * @var ImportResult $UpdateResult
     * @access public
     */
    public $UpdateResult = null;

    /**
     * @param ImportResult $UpdateResult
     * @access public
     */
    public function __construct($UpdateResult)
    {
      $this->UpdateResult = $UpdateResult;
    }

}
