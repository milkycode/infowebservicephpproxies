<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ImportFieldInfo
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