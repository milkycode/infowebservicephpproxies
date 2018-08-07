<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetOptionTypeList
{
    /**
     * @var Promidata_Service_DTO_OptionTypeItem[] $GetOptionTypeListResult
     * @access public
     */
    public $GetOptionTypeListResult = null;

    /**
     * @param Promidata_Service_DTO_OptionTypeItem[] $GetOptionTypeListResult
     * @access public
     */
    public function __construct($GetOptionTypeListResult)
    {
        $this->GetOptionTypeListResult = $GetOptionTypeListResult;
    }
}