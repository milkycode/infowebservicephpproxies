<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ExistsResult extends Promidata_Service_DTO_ImportDataBase
{
    /**
     * @var string $ExternId
     * @access public
     */
    public $ExternId = null;

    /**
     * @var boolean $Exists
     * @access public
     */
    public $Exists = null;

    /**
     * @param guid $ImporterIdentifier
     * @param boolean $Exists
     * @access public
     */
    public function __construct($ImporterIdentifier, $Exists)
    {
        parent::__construct($ImporterIdentifier);
        $this->Exists = $Exists;
    }
}