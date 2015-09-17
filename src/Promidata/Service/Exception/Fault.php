<?php
/**
 * Fault Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Exception_Fault extends Promidata_Service_Exception_Communication
{
    public function __construct()
    {
        parent::__construct();
    }
}
