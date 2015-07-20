<?php

class ImportFieldInfo
{

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $FieldName
     * @access public
     */
    public $FieldName = null;

    /**
     * @var boolean $IsRequired
     * @access public
     */
    public $IsRequired = null;

    /**
     * @param boolean $IsRequired
     * @access public
     */
    public function __construct($IsRequired)
    {
      $this->IsRequired = $IsRequired;
    }

}
