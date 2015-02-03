<?php

include_once('ImportFieldInfo.php');

class CompositeImportFieldInfo extends ImportFieldInfo
{

    /**
     * @var ImportFieldInfo[] $CompositeFields
     * @access public
     */
    public $CompositeFields = null;

    /**
     * @param boolean $IsRequired
     * @access public
     */
    public function __construct($IsRequired)
    {
      parent::__construct($IsRequired);
    }

}
