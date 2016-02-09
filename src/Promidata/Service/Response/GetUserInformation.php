<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetUserInformation
{
    /**
     *
     * @var Promidata_Service_DTO_UserInformation[] $GetUserInformationResult
     * @access public
     */
    public $GetUserInformationResult = null;

    /**
     *
     * @param Promidata_Service_DTO_UserInformation[] $GetUserInformationResult
     * @access public
     */
    public function __construct($GetUserInformationResult)
    {
        $this->GetUserInformationResult = $GetUserInformationResult;
    }
}