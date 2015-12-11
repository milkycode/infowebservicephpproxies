<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Request_GetPossibleAutomaticConditionList
{
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterData $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @var string[] $possibleDispatchTypes
     * @access public
     */
    public $possibleDispatchTypes = null;

    /**
     * @param Promidata_Service_DTO_TenderIndentImporterData $importdata
     * @param string[] $possibleDispatchTypes
     * @access public
     */
    public function __construct(Promidata_Service_DTO_TenderIndentImporterData $importdata, $possibleDispatchTypes)
    {
        $this->importdata = $importdata;
        $this->possibleDispatchTypes = $possibleDispatchTypes;
    }
}