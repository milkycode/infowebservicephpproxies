<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_SearchCustomer
{
    /**
     * @var Promidata_Service_DTO_CustomerSearchParameter[] $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @param Promidata_Service_DTO_CustomerSearchParameter[] $importdata
     * @access public
     */
    public function __construct($importdata)
    {
      $this->importdata = $importdata;
    }
}