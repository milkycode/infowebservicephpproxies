<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
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
     * @access public
     */
    public function __construct()
    {
    }
}