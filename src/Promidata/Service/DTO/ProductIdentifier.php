<?php

class Promidata_Service_DTO_ProductIdentifier
{

    /**
     *
     * @var int $ProductId
     * @access public
     */
    public $ProductId = null;

    /**
     *
     * @var string $ProductNumber
     * @access public
     */
    public $ProductNumber = null;

    /**
     *
     * @var guid $ProductUniqueId
     * @access public
     */
    public $ProductUniqueId = null;

    /**
     *
     * @access public
     */
    public function __construct($ProductNumber)
    {
        $this->ProductNumber = $ProductNumber;
    }

}
