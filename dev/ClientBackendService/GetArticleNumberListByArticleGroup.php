<?php

class GetArticleNumberListByArticleGroup
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
