<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_GetArticleNumberListByArticleGroup
{
    /**
     * @var string $articleGroupName
     * @access public
     */
    public $articleGroupName = null;

    /**
     * @param string $articleGroupName
     * @access public
     */
    public function __construct($articleGroupName)
    {
        $this->articleGroupName = $articleGroupName;
    }
}