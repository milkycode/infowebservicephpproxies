<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ProductIdentifier
{
    /**
     * @var int $ProductId
     * @access public
     */
    public $ProductId = null;

    /**
     * @var string $ProductNumber
     * @access public
     */
    public $ProductNumber = null;

    /**
     * @var guid $ProductUniqueId
     * @access public
     */
    public $ProductUniqueId = null;

    /**
     * @param guid $ProductUniqueId
     * @access public
     */
    public function __construct($ProductUniqueId = null)
    {
        $this->ProductUniqueId = $ProductUniqueId;
    }
}