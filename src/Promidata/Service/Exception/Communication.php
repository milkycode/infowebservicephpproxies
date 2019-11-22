<?php
/**
 * Communication Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Exception_Communication extends Promidata_Service_Exception_System
{
    public function __construct($any = null, $FactoryType = null)
    {
        parent::__construct($any, $FactoryType);
    }
}
