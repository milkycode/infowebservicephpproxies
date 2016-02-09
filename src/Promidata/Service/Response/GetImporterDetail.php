<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetImporterDetail
{
    /**
     *
     * @var Promidata_Service_DTO_ImporterDetails $GetImporterDetailResult
     * @access public
     */
    public $GetImporterDetailResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImporterDetails $GetImporterDetailResult
     * @access public
     */
    public function __construct($GetImporterDetailResult)
    {
        $this->GetImporterDetailResult = $GetImporterDetailResult;
    }
}