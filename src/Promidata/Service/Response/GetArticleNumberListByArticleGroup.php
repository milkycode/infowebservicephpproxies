<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetArticleNumberListByArticleGroup
{
    /**
     *
     * @var string[] $GetArticleNumberListByArticleGroupResult
     * @access public
     */
    public $GetArticleNumberListByArticleGroupResult = null;

    /**
     *
     * @param string[] $GetArticleNumberListByArticleGroupResult
     * @access public
     */
    public function __construct($GetArticleNumberListByArticleGroupResult)
    {
        $this->GetArticleNumberListByArticleGroupResult = $GetArticleNumberListByArticleGroupResult;
    }
}