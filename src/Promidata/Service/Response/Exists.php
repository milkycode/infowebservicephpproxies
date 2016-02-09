<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_Exists
{
    /**
     *
     * @var Promidata_Service_DTO_ExistsResult $ExistsResult
     * @access public
     */
    public $ExistsResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ExistsResult $ExistsResult
     * @access public
     */
    public function __construct($ExistsResult)
    {
        $this->ExistsResult = $ExistsResult;
    }
}