<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetImporter
{
    /**
     *
     * @var Promidata_Service_DTO_ImporterDefinition[] $GetImporterResult
     * @access public
     */
    public $GetImporterResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImporterDefinition[] $GetImporterResult
     * @access public
     */
    public function __construct($GetImporterResult)
    {
        $this->GetImporterResult = $GetImporterResult;
    }
}