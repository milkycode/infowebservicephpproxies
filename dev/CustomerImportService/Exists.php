<?php

class Exists
{

    /**
     * @var ExistsArgument $argument
     * @access public
     */
    public $argument = null;

    /**
     * @param ExistsArgument $argument
     * @access public
     */
    public function __construct($argument)
    {
      $this->argument = $argument;
    }

}
