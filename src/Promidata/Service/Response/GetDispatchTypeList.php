<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetDispatchTypeList
{
    /**
     * @var Promidata_Service_DTO_LocalizedItem[] $GetDispatchTypeListResult
     * @access public
     */
    public $GetDispatchTypeListResult = null;

    /**
     * @param Promidata_Service_DTO_LocalizedItem[] $GetDispatchTypeListResult
     * @access public
     */
    public function __construct($GetDispatchTypeListResult)
    {
        $this->GetDispatchTypeListResult = $GetDispatchTypeListResult;
    }
}