<?php

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
