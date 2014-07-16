<?php

class Promidata_Service_DTO_CustomerIdentifier
{

    /**
     *
     * @var int $CustomerId
     * @access public
     */
    public $CustomerId = null;

    /**
     *
     * @var string $CustomerNumber
     * @access public
     */
    public $CustomerNumber = null;

    /**
     *
     * @access public
     */
    public function __construct($CustomerId = null, $CustomerNumber = null)
    {
        $this->CustomerId = null;
        $this->CustomerNumber = null;
    }

}
