<?php

class Promidata_Service_DTO_GetIndentInformationParameter
{

    /**
     * @var string $IndentNumberFull
     * @access public
     */
    public $IndentNumberFull = null;

    /**
     * @access public
     * @param string $IndentNumberFull
     */
    public function __construct($IndentNumberFull = null)
    {
        $this->IndentNumberFull = $IndentNumberFull;
    }

}
