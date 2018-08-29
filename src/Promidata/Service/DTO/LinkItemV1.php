<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_LinkItemV1
{
    /**
     * @var string $LinkName
     * @access public
     */
    public $LinkName = null;

    /**
     * @var string $LinkString
     * @access public
     */
    public $LinkString = null;

    /**
     * @access public
     * @param string $LinkName
     * @param string $LinkString
     */
    public function __construct($LinkName = null, $LinkString = null)
    {
        $this->LinkName = $LinkName;
        $this->LinkString = $LinkString;
    }
}