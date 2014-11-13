<?php

class Promidata_Service_Request_Exists
{

    /**
     *
     * @var Promidata_Service_DTO_ExistsArgument $argument
     * @access public
     */
    public $argument = null;

    /**
     *
     * @param Promidata_Service_DTO_ExistsArgument $argument
     * @access public
     */
    public function __construct($argument)
    {
        $this->argument = $argument;
    }

}
