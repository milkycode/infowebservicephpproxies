<?php
/**
 * Fault Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>

 * @package     Promidata_Service

 */
class Promidata_Service_Exception_Fault extends Promidata_Service_Exception_Communication
{
    public function __construct()
    {
        parent::__construct();
    }
}