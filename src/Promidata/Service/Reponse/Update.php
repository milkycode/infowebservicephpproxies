<?php

class Promidata_Service_Reponse_Update
{

    /**
     *
     * @var Promidata_Service_DTO_ImportResult $UpdateResult
     * @access public
     */
    public $UpdateResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImportResult $UpdateResult
     * @access public
     */
    public function __construct($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
    }

}
