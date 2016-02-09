<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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