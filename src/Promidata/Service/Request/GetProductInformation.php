<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_GetProductInformation
{
    /**
     * @var string $ownArticleNumber
     * @access public
     */
    public $ownArticleNumber = null;

    /**
     * @param string $ownArticleNumber
     * @access public
     */
    public function __construct($ownArticleNumber)
    {
        $this->ownArticleNumber = $ownArticleNumber;
    }
}