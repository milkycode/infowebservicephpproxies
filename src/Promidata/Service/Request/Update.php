<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_Update
{
    /**
     * @var Promidata_Service_DTO_DataSelector $dataSelector
     * @access public
     */
    public $dataSelector = null;

    /**
     *
     * @var Promidata_Service_DTO_ImportData $importData
     * @access public
     */
    public $importData = null;

    /**
     * @param Promidata_Service_DTO_DataSelector $dataSelector
     * @param Promidata_Service_DTO_ImportData $importData
     * @access public
     */
    public function __construct($dataSelector, $importData)
    {
        $this->dataSelector = $dataSelector;
        $this->importData = $importData;
    }
}