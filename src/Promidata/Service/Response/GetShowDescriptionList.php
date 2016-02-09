<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetShowDescriptionList
{
    /**
     * @var Promidata_Service_DTO_ShowDescriptionItem[] $GetShowDescriptionListResult
     * @access public
     */
    public $GetShowDescriptionListResult = null;

    /**
     * @param Promidata_Service_DTO_ShowDescriptionItem[] $GetShowDescriptionListResult
     * @access public
     */
    public function __construct($GetShowDescriptionListResult)
    {
      $this->GetShowDescriptionListResult = $GetShowDescriptionListResult;
    }
}