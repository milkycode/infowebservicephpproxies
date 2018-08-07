<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetOptionList
{
    /**
     * @var Promidata_Service_DTO_OptionItem[] $GetOptionListResult
     * @access public
     */
    public $GetOptionListResult = null;

    /**
     * @param Promidata_Service_DTO_OptionItem[] $GetOptionListResult
     * @access public
     */
    public function __construct($GetOptionListResult)
    {
        $this->GetOptionListResult = $GetOptionListResult;
    }
}