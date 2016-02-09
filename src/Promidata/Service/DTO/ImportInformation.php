<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ImportInformation
{
    /**
     * @var string $ExternId
     * @access public
     */
    public $ExternId = null;

    /**
     * @var string $ImportSource
     * @access public
     */
    public $ImportSource = null;

    /**
     * @access public
     */
    public function __construct()
    {
    }
}