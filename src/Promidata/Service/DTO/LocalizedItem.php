<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_LocalizedItem
{
    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $Show
     * @access public
     */
    public $Show = null;

    /**
     * @var Promidata_Service_DTO_LocalizationItem[] $Texts
     * @access public
     */
    public $Texts = null;

    /**
     * @access public
     */
    public function __construct()
    {
    }
}