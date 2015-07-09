<?php
class Promidata_Service_DTO_CustomerSearchParameter
{
    /**
     * Possible SearchKeys (for 2.11, could be extended at any time):
     * - CompanyName
     * - AnyPostCode
     * - AnyEmail
     * @var string $SearchKey
     * @access public
     */
    public $SearchKey = null;

    /**
     * @var anyType $SearchValue
     * @access public
     */
    public $SearchValue = null;

    /**
     * @param $SearchKey
     * @param $SearchValue
     */
    public function __construct($SearchKey = null, $SearchValue = null)
    {
        $this->SearchKey = $SearchKey;
        $this->SearchValue = new SoapVar($SearchValue, XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'Value');
    }
}
