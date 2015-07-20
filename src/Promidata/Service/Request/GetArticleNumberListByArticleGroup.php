<?php

class Promidata_Service_Request_GetArticleNumberListByArticleGroup
{

    /**
     *
     * @var string $articleGroupName
     * @access public
     */
    public $articleGroupName = null;

    /**
     *
     * @param string $articleGroupName
     * @access public
     */
    public function __construct($articleGroupName)
    {
        $this->articleGroupName = $articleGroupName;
    }

}
