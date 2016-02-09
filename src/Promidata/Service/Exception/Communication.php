<?php
/**
 * Communication Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>

 * @package     Promidata_Service

 */
class Promidata_Service_Exception_Communication extends Promidata_Service_Exception_System
{
    public function __construct($any = null, $FactoryType = null)
    {
        parent::__construct($any, $FactoryType);
    }
}
