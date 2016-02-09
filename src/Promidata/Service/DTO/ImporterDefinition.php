<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ImporterDefinition
{
    /**
     * @var guid $ImporterId
     * @access public
     */
    public $ImporterId = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @param guid $ImporterId
     * @access public
     */
    public function __construct($ImporterId)
    {
        $this->ImporterId = $ImporterId;
    }
}