<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_GetProductConfigurationParameter
{
    /**
     * @var string $OwnArticleNumber
     * @access public
     */
    public $OwnArticleNumber = null;

    /**
     * @var guid $ProductIdentifier
     * @access public
     */
    public $ProductIdentifier = null;

    /**
     * One of each parameter is enough to identify a product in most cases.
     * The ProductIdentifier is always unique.
     * @access public
     * @param string $ProductIdentifier
     * @param string $OwnArticleNumber
     */
    public function __construct($ProductIdentifier = null, $OwnArticleNumber = null)
    {
        $this->ProductIdentifier = $ProductIdentifier;
        $this->OwnArticleNumber = $OwnArticleNumber;
    }
}