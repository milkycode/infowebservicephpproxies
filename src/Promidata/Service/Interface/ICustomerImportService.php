<?php

interface Promidata_Service_Interface_ICustomerImportService
{

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