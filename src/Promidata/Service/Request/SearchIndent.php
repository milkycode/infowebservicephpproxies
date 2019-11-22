<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_SearchIndent
{
    /**
     * @var Promidata_Service_DTO_SearchIndentParameter[] $searchIndentParameters
     * @access public
     */
    public $searchIndentParameters = null;

    /**
     * @param Promidata_Service_DTO_SearchIndentParameter[] $searchIndentParameters
     * @access public
     */
    public function __construct($searchIndentParameters)
    {
        $this->searchIndentParameters = $searchIndentParameters;
    }
}