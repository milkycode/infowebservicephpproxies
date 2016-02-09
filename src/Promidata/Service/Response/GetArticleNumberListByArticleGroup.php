<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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