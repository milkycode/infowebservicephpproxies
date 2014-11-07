<?php

class Promidata_Service_DTO_CustomerSearchParameter
{

    /**
     *
     * @var string $Key
     * @access public
     */
    public $SearchKey = null;

    /**
     *
     * @var object $Value
     * @access public
     */
    public $SearchValue = null;

    /**
     *
     * @param string $searchKey
     * @param string $searchValue
     * @access public
     */
    public function __construct($key, $value)
    {
        $this->SearchKey = $key;
        $this->SearchValue = new SoapVar($value, XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'Value');
    }

}
