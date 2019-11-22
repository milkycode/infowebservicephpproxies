<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_ImportInformation
{
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
     * @access public
     */
    public function __construct()
    {
    }
}