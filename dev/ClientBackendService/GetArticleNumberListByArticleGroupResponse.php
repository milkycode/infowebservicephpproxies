<?php

class GetArticleNumberListByArticleGroupResponse
{

    /**
     * @var string[] $GetArticleNumberListByArticleGroupResult
     * @access public
     */
    public $GetArticleNumberListByArticleGroupResult = null;

    /**
     * @param string[] $GetArticleNumberListByArticleGroupResult
     * @access public
     */
    public function __construct($GetArticleNumberListByArticleGroupResult)
    {
      $this->GetArticleNumberListByArticleGroupResult = $GetArticleNumberListByArticleGroupResult;
    }

}
