<?php

interface Promidata_Service_Interface_IUniversalImportDocumentationService
{

    /**
     * @param Promidata_Service_Request_GetImporter $getImporterRequest
     * @return Promidata_Service_Reponse_GetImporter
     */
    public function GetImporter(Promidata_Service_Request_GetImporter $getImporterRequest);

    /**
     * @param Promidata_Service_Request_GetImporterDetail $getImporterDetailRequest
     * @return Promidata_Service_Reponse_GetImporterDetail
     */
    public function GetImporterDetail(Promidata_Service_Request_GetImporterDetail $getImporterDetailRequest);

}