<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_LocalizationItem
{
    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @var string $Show
     * @access public
     */
    public $Show = null;

    /**
     * @access public
     * @param string $Show
     * @param string $Description
     * @param string $Language
     */
    public function __construct($Show = null, $Description = null, $Language = null)
    {
        $this->Show = $Show;
        $this->Description = $Description;
        $this->Language = $Language;
    }
}