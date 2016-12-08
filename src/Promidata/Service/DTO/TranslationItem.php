<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_TranslationItem
{
    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @var string $Value
     * @access public
     */
    public $Value = null;

    /**
     * @access public
     */
    public function __construct()
    {
    }
}