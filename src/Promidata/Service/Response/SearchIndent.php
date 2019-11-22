<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_SearchIndent
{
    /**
     * @var Promidata_Service_DTO_IndentSearchResult[] $SearchIndentResult
     * @access public
     */
    public $SearchIndentResult = null;

    /**
     * @param Promidata_Service_DTO_IndentSearchResult[] $SearchIndentResult
     * @access public
     */
    public function __construct($SearchIndentResult)
    {
        $this->SearchIndentResult = $SearchIndentResult;
    }
}