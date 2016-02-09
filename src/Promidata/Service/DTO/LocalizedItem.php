<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_LocalizedItem
{
    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $Show
     * @access public
     */
    public $Show = null;

    /**
     * @var Promidata_Service_DTO_LocalizationItem[] $Texts
     * @access public
     */
    public $Texts = null;

    /**
     * @access public
     */
    public function __construct()
    {
    }
}