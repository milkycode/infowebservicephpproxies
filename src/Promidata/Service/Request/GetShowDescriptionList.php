<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Request_GetShowDescriptionList
{
    /**
     * @var Promidata_Service_Enum_ShowDescriptionListType $showDescriptionListTypeEnum
     * @access public
     */
    public $showDescriptionListTypeEnum = null;

    /**
     * @param Promidata_Service_Enum_ShowDescriptionListType $showDescriptionListTypeEnum
     * @access public
     */
    public function __construct(Promidata_Service_Enum_ShowDescriptionListType $showDescriptionListTypeEnum)
    {
        $this->showDescriptionListTypeEnum = $showDescriptionListTypeEnum;
    }
}