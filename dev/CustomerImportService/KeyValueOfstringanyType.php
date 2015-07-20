<?php

class KeyValueOfstringanyType
{

    /**
     * @var string $Key
     * @access public
     */
    public $Key = null;

    /**
     * @var anyType $Value
     * @access public
     */
    public $Value = null;

    /**
     * @param string $Key
     * @param anyType $Value
     * @access public
     */
    public function __construct($Key, $Value)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

}
