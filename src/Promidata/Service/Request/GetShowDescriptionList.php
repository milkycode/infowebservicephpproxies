<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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