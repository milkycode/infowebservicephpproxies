<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_Import
{
    /**
     *
     * @var Promidata_Service_DTO_ImportResult $ImportResult
     * @access public
     */
    public $ImportResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImportResult $ImportResult
     * @access public
     */
    public function __construct($ImportResult)
    {
        $this->ImportResult = $ImportResult;
    }
}