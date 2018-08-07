<?php
/**
 * Fault Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Exception_Fault extends Promidata_Service_Exception_Communication
{
    public function __construct()
    {
        parent::__construct();
    }
}