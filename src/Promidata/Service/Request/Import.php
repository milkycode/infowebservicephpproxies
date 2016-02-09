<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_Import
{
    /**
     *
     * @var Promidata_Service_DTO_ImportData $importData
     * @access public
     */
    public $importData = null;

    /**
     *
     * @param Promidata_Service_DTO_ImportData $importData
     * @access public
     */
    public function __construct($importData)
    {
        $this->importData = $importData;
    }
}