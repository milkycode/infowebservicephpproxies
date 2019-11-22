<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_ImporterDetails
{
    /**
     * @var Promidata_Service_DTO_ImportFieldInfo[] $FieldInfos
     * @access public
     */
    public $FieldInfos = null;

    /**
     * @var guid $ImporterId
     * @access public
     */
    public $ImporterId = null;

    /**
     * @param guid $ImporterId
     * @access public
     */
    public function __construct($ImporterId)
    {
        $this->ImporterId = $ImporterId;
    }
}