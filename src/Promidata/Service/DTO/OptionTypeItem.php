<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_OptionTypeItem
{
    /**
     * @var boolean $Disabled
     * @access public
     */
    public $Disabled = null;

    /**
     * @var boolean $IsSystemType
     * @access public
     */
    public $IsSystemType = null;

    /**
     * @var string $Key
     * @access public
     */
    public $Key = null;

    /**
     * @var Promidata_Service_DTO_TranslationItem[] $Translations
     * @access public
     */
    public $Translations = null;

    /**
     * @param boolean $Disabled
     * @param boolean $IsSystemType
     * @access public
     */
    public function __construct($Disabled, $IsSystemType)
    {
        $this->Disabled = $Disabled;
        $this->IsSystemType = $IsSystemType;
    }
}