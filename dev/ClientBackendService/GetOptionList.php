<?php

class GetOptionList
{

    /**
     * @var GetOptionListParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param GetOptionListParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
