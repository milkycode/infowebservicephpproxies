<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
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