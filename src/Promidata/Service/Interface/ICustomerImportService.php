<?php
/**
 * Interface for Promidata PromotionalOffice CustomerImportService/CustomerImportService.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
interface Promidata_Service_Interface_ICustomerImportService
{
    /**
     * @brief Authenticate with your Promotional Office Login Data.
     * @detail Needs to be called at first access
     *
     * @param Promidata_Service_Request_Logon $logonRequest
     */
    public function Logon(Promidata_Service_Request_Logon $logonRequest);

    /**
     * @param Promidata_Service_Request_Import $importRequest
     * @return Promidata_Service_Response_Import
     */
    public function Import(Promidata_Service_Request_Import $importRequest);

    /**
     * @param Promidata_Service_Request_Update $updateRequest
     * @return Promidata_Service_Response_Update
     */
    public function Update(Promidata_Service_Request_Update $updateRequest);

    /**
     * @param Promidata_Service_Request_Exists $existsRequest
     * @return Promidata_Service_Response_Exists
     */
    public function Exists(Promidata_Service_Request_Exists $existsRequest);
}