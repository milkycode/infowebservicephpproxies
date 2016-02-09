<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ImportDataBase
{
    /**
     * @var guid $ImporterIdentifier
     * @access public
     */
    public $ImporterIdentifier = null;

    /**
     * For internal use only, you can ommit the value
     * @var guid $DatabaseIdentifier
     * @access public
     */
    public $DatabaseIdentifier = null;

    /**
     * @param guid $ImporterIdentifier
     * @param guid $DatabaseIdentifier
     * @access public
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier = '00000000-0000-0000-0000-000000000000')
    {
        $this->ImporterIdentifier = $ImporterIdentifier;
        $this->DatabaseIdentifier = $DatabaseIdentifier;
    }
}