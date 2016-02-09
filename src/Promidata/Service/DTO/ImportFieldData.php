<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ImportFieldData
{
    /**
     * @var string $FieldData
     * @access public
     */
    public $FieldData = null;

    /**
     * @var string $FieldIdentifier
     * @access public
     */
    public $FieldIdentifier = null;

    /**
     * @var Promidata_Service_DTO_KeyValuePairOfstringstring[] $Options
     * @access public
     */
    public $Options = null;

    /**
     *
     * @access public
     */
    public function __construct($FieldIdentifier = null, $FieldData = null, $Options = null)
    {
        $this->FieldIdentifier = $FieldIdentifier;
        $this->FieldData = $FieldData;
        $this->Options = $Options;
    }
}