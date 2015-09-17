<?php
class Promidata_Service_Request_GetProductInformation
{
    /**
     * @var string $ownArticleNumber
     * @access public
     */
    public $ownArticleNumber = null;

    /**
     *
     * @param string $ownArticleNumber
     * @access public
     */
    public function __construct($ownArticleNumber)
    {
        $this->ownArticleNumber = $ownArticleNumber;
    }
}
