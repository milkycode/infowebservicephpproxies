<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_Update
{
    /**
     *
     * @var Promidata_Service_DTO_ImportResult $UpdateResult
     * @access public
     */
    public $UpdateResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImportResult $UpdateResult
     * @access public
     */
    public function __construct($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
    }
}