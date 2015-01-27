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
     * @var guid $CustomerIdentifier
     * @access public
     */
    public $CustomerIdentifier = null;

    /**
     *
     * @var string $CustomerNumber
     * @access public
     */
    public $CustomerNumber = null;

    /**
     * @var string $ExternId
     * @access public
     */
    public $ExternId = null;

    /**
     * @var string $ImportSource
     * @access public
     */
    public $ImportSource = null;

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
