<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_PurchaseOrderSearchParameter
{
    /**
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
     * @access public
     * @param string $SearchKey
     * @param string $SearchValue
     */
    public function __construct($SearchKey = null, $SearchValue = null)
    {
        $this->SearchKey = $SearchKey;
        $this->SearchValue = new SoapVar($SearchValue, XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'Value');
    }
}