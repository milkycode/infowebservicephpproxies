<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
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