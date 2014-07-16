<?php

interface Promidata_Service_Interface_ICustomerBackendService
{
    /**
     * @brief Authenticate with your Promotional Office Login Data.
     * @detail Needs to be called at first access
     *
     * @param Promidata_Service_Request_Logon $logonRequest
     * @return Promidata_Service_Reponse_Logon
     */
    public function Logon(Promidata_Service_Request_Logon $logonRequest);

    /**
     * @brief Retrieves a Promidata_Service_Request_GetProductInformation.
     *
     * @param Promidata_Service_Request_GetProductInformation $getProductInformationRequest
     * @return Promidata_Service_Reponse_ProductInformation
     */
    public function GetProductInformation(Promidata_Service_Request_GetProductInformation $getProductInformationRequest);

    /**
     * @brief Returns the price relays of a product for a specific customer.
     * It takes care on special prices for the given customer
     *
     * @param Promidata_Service_Request_GetProductPrices $getProductPricesRequest
     * @return Promidata_Service_Reponse_GetProductPrices
     */
    public function GetProductPrices(Promidata_Service_Request_GetProductPrices $getProductPricesRequest);

    /**
     * @brief Returns the expected stock movements of a specific product.
     *
     * @param Promidata_Service_Request_GetExpectedStockMovement $getExpectedStockMovementRequest
     * @return Promidata_Service_Reponse_ExpectedStockMovement
     */
    public function GetExpectedStockMovement(Promidata_Service_Request_GetExpectedStockMovement $getExpectedStockMovementRequest);

    /**
     * @brief Returns the price relays of a product.
     *
     * @param Promidata_Service_Request_GetProductPriceList $getProductPriceListRequest
     * @return Promidata_Service_Reponse_GetProductPriceList
     */
    public function GetProductPriceList(Promidata_Service_Request_GetProductPriceList $getProductPriceListRequest);

    /**
     * @brief Returns information about a customer
     * 
     * @param Promidata_Service_Request_GetCustomerInformation $getCustomerInformationRequest
     * @return Promidata_Service_Reponse_GetCustomerInformation
     */
    public function GetCustomerInformation(Promidata_Service_Request_GetCustomerInformation $getCustomerInformationRequest);

    /**
     * @brief Returns a list of customer informations of customers which has changed since given datetime.
     * 
     * @param Promidata_Service_Request_GetCustomerInformationList $getCustomerInformationListRequest
     * return Promidata_Service_Reponse_CustomerInformationList
     */
    public function GetCustomerInformationList(Promidata_Service_Request_GetCustomerInformationList $getCustomerInformationListRequest);

    /**
     * @brief Returns a list of user informations
     * 
     * @param Promidata_Service_Request_GetUserInformation $getUserInformationRequest
     * @return Promidata_Service_Reponse_UserInformation
     */
    public function GetUserInformation(Promidata_Service_Request_GetUserInformation $getUserInformationRequest);

    /**
     * @brief Returns a price information list for a Customer
     * 
     * @param Promidata_Service_Request_GetCustomerPriceList $getCustomerPriceListRequest
     * @return Promidata_Service_Reponse_GetProductPriceList
     */
    public function GetCustomerPriceList(Promidata_Service_Request_GetCustomerPriceList $getCustomerPriceListRequest);

    /**
     * @brief Returns a list of possible automatic conditions for the given constellation
     * 
     * @param Promidata_Service_Request_GetPossibleAutomaticConditionList $getPossibleAutomaticConditionListRequest
     * @return Promidata_Service_Reponse_AutomaticConditionList
     */
    public function GetPossibleAutomaticConditionList(Promidata_Service_Request_GetPossibleAutomaticConditionList $getPossibleAutomaticConditionListRequest);

    /**
     * @brief Returns a list of articlenumbers of products inside a specified product group
     * 
     * @param Promidata_Service_Request_GetArticleNumberListByArticleGroup $getArticleNumberListByArticleGroupRequest
     * @return Promidata_Service_Reponse_GetArticleNumberListByArticleGroup
     */
    public function GetArticleNumberListByArticleGroup(Promidata_Service_Request_GetArticleNumberListByArticleGroup $getArticleNumberListByArticleGroupRequest);
}