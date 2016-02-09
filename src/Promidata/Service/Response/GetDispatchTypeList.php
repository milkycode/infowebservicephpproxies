<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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