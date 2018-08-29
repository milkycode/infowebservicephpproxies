<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
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