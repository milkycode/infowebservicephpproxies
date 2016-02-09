<?php
/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_AdditionalData
{
    /**
     * @var string $AdditionalDataKey
     * @access public
     */
    public $AdditionalDataKey = null;

    /**
     * @var string $Value
     * @access public
     */
    public $Value = null;

    /**
     * @param string $AdditionalDataKey
     * @param string $Value
     * @access public
     */
    public function __construct($AdditionalDataKey = null, $Value = null)
    {
        $this->AdditionalDataKey = $AdditionalDataKey;
        $this->Value = $Value;
    }
}