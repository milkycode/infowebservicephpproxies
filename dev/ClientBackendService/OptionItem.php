<?php

class OptionItem
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
     * @var string $OptionTypeKey
     * @access public
     */
    public $OptionTypeKey = null;

    /**
     * @var TranslationItem[] $Translations
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
